<?php

namespace App\Notifications;

use Ichtrojan\Otp\Otp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ForgetPasswordNotification extends Notification
{
    use Queueable;
    public $mailer;
    public $subject;
    public $fromEmail;
    public $message;
    private $otp;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->mailer = "smtp";
        $this->subject = "Forget Password - Email Verification needed";
        $this->mailer = "smtp";
        $this->otp = new Otp;
        $this->fromEmail = "admin@smalltin.com";
        $this->message = "To recover your acount You need to verify that the account belong to you";

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
        $mainOtp  = $this->otp->generate($notifiable->email, "numeric",6,60);
    
        return (new MailMessage)
                    ->mailer($this->mailer)
                    ->subject($this->subject)
                    ->greeting("Hello ".$notifiable->username)
                    ->line($this->message)
                  ->line("use this code to verify yourself: ".$mainOtp->token)
                    ->line('Thank you for using our application!');
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
