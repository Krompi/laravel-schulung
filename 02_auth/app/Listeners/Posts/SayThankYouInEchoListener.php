<?php

namespace App\Listeners\Posts;

use App\Events\Posts\PostHasBeenCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SayThankYouInEchoListener
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
     * @param  \App\Events\Posts\PostHasBeenCreated  $event
     * @return void
     */
    public function handle(PostHasBeenCreated $event)
    {
        dd($event->post->title);
    }
}
