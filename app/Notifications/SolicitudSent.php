<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SolicitudSent extends Notification
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
        return ['Mail','database'];
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
                    ->action('click aqui para ver el mensaje', url('solicitudes.show',$this->registro))
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

             'link' => route('solicitudes.show',$this->registro->id),
             'text' => "Has recibido un  mensaje dando respuesta a tu solicitud"

        ];
       
    }
}
