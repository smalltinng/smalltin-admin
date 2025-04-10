<?php

namespace App\Notifications;

use Ichtrojan\Otp\Otp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailVerificationNotification extends Notification
{
    use Queueable;
    public $mailer;
    public $message;
    public $subject;
    public $fromEmail;
    private $otp;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->message = "Use the Below code for verification process";
        $this->subject = "Email Verification Needed";
        $this->mailer = "smtp";
        $this->fromEmail = "admin@smalltin.com";
        $this->otp = new Otp;
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
        $otp1 = $this->otp->generate($notifiable->email, "numeric", 6, 60);
        return (new MailMessage)
            ->mailer(mailer: $this->mailer)
            ->from($this->fromEmail)
            ->subject($this->subject)
            ->greeting('Welcome to Smalltin')
            ->line($this->message)
            ->line("code " . $otp1->token);
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