<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Requests\ContactFormRequest;

    


class ContactFormMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $message;
    public function __construct(contactFormRequest $message)
    {
        $this->message = $message;
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
    public function toMail($notifiable)
    {
     return (new MailMessage)
     
     ->subject(config('recipient.name') . ", you have a new message!")
     ->greeting("This Message From Rayan lounge website Contact Form ")
     ->salutation("Thats All ")
     ->from($this->message->email, $this->message->name)
     ->line('Customer Email: '.$this->message->email)
     ->line('Customer Number: '.$this->message->phone)
     ->line('Message: '.$this->message->message);
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
