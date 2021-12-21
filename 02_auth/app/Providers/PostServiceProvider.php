<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Observers\PostObserver;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Post::creating( function (Post $post) {
        //     if ( $post->title == 'stop' ) {
        //         throw new Exception('meine Suppe ess ich nicht');
        //         return false;
        //     }
        // });
        Post::observe(PostObserver::class);
    }
}
