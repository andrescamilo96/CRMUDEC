<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DesAprobacionEmpresaSent extends Notification
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
        return ['mail'];
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
                    ->line('Empresa no validada recuerda ingresar informacion veridica')
                    ->action('click aqui para ingresar  nuevamente', url('indexempresa.index'))
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
        
    }
}
