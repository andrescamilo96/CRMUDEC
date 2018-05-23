<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Notifications\PostPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Notification;
use App\User;
class NotifyUsersAboutNewPost implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $users = User::all();

        Notification::send($users, new PostPublished($event->post));
        //var_dump('Post Creado');

    }
}
