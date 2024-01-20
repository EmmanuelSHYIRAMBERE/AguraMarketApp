<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReplyContactEmailNotification extends Notification
{
    use Queueable;

    private $reply;

    /**
     * Create a new notification instance.
     */
    public function __construct($reply)
    {
        $this->reply=$reply;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting($this->reply['greeting'])
                    ->line($this->reply['intro'])
                    ->line($this->reply['reply'])
                    ->action($this->reply['button'], $this->reply['url'])
                    ->line($this->reply['remark']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
