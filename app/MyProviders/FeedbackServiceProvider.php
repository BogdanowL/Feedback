<?php

namespace App\MyProviders;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('feedBackService', 'App\Logic\FeedBackLogic');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
