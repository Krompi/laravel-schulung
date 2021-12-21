<?php

namespace App\Listeners\Posts;

use App\Events\Posts\PostHasBeenCreated;
use App\Jobs\PostSendMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendThankYouEmail
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
        PostSendMailJob::dispatch($event->post);
    }
}
