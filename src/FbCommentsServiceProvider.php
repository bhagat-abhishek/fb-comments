<?php

namespace BhagatAbhishek\FbComments;

use Illuminate\Support\ServiceProvider;

class FbCommentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // Publish the config file
        $this->publishes([
            __DIR__ . '/../config/fb-comments.php' => config_path('fb-comments.php'),
        ], 'config');

        // Publish the views as components
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/bhagat-abhishek/fb-comments'),
        ], 'fb-comments-views');

        // Load the views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'fb-comments');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
