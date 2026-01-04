<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        $url = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));

        return (new MailMessage)
            ->subject('Reset hasła')
            ->greeting('Cześć!')
            ->line('Otrzymaliśmy prośbę o zresetowanie hasła do Twojego konta.')
            ->action('Zresetuj hasło', $url)
            ->line('Link wygaśnie po 60 minutach.')
            ->line('Jeżeli to nie Ty wysłałeś prośbę, zignoruj tę wiadomość.')
            ->salutation('Pozdro');
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
