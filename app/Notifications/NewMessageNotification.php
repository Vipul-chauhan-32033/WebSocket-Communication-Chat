<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Models\Message;

class NewMessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Message $message)
    {
    }


    public function via($notifiable): array
    {
        return ['database'];
    }


    public function toDatabase($notifiable): array
    {
        return [
            'message_id' => $this->message->id,
            'from_user_id' => $this->message->user_id,
            'from_user_name' => $this->message->user->name,
            'body' => str($this->message->body)->limit(120)->toString(),
        ];
    }
}
