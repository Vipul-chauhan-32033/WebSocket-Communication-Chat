<?php
namespace App\Http\Controllers;


use App\Events\MessageCreated;
use App\Events\UserTyping;
use App\Models\Message;
use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;

class MessageController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return Message::with('user:id,name')
            ->latest()
            ->take(50)
            ->get()
            ->sortBy('id')
            ->values();
    }


    public function store(Request $request)
    {
        $data = $request->validate(['body' => ['required', 'string', 'max:2000']]);


        $message = Message::create([
            'user_id' => $request->user()->id,
            'body' => $data['body'],
        ]);


        $message->load('user:id,name');


        broadcast(new MessageCreated($message))->toOthers();


        return response()->json($message, 201);
    }


    public function typing(Request $request)
    {
        broadcast(new UserTyping($request->user()->id, $request->user()->name))->toOthers();
        return response()->noContent();
    }
}