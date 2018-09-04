<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserNotification extends Notification
{
    protected $registro;
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($registro)
    {
        //
         $this->registro = $registro; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting($notifiable->name . ",")
                    ->subject('Mensaje CRM Facatativa -NoReply')
                    ->line('Nueva Notificacion')
                    ->action('click aqui para ver la notificacion', url('/home'))
                    ->line('Gracias Por leernos.!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
         return [

             'link' => route('notificaciones.index'),
             'text' => "Tu hoja de vida esta siendo observada por una empresa, pronto se pondra en contacto contigo"

        ];
    }
}
