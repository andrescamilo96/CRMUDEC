<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\post;
class PostPublished extends Notification
{
    protected $post;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        //
        $this->post = $post;    
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
                   
                    ->subject('Nuevo Post publicado')
                    ->line($notifiable->name . ", hemos publicado un nuevo post")
                    ->action('Click Aqui para ver el mensaje', route('posts.show' , $this->post))
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
            //
            'link' =>route('posts.show',$this->post),
            'text' =>"Hemos Publicado un nuevo Post " .$this->post->Titulo
        ];
    }
}
