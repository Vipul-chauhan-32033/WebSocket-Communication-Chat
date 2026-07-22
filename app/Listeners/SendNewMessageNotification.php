<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewMessageNotification;
use App\Models\User;


class SendNewMessageNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MessageCreated $event): void
    {
        // Notify all users except the sender (for demo; scope this per-conversation in real apps)
        User::whereKeyNot($event->message->user_id)
            ->get()
            ->each(fn($user) => $user->notify(new NewMessageNotification($event->message)));
    }
}
