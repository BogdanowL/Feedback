<?php

namespace App\MyProviders;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('helpersService', 'App\Logic\HelpersLogic');
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
