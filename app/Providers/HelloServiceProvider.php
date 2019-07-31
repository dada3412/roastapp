<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('hello', 'App\Contracts\Hello');
        $this->app->bind('App\Contracts\Hello', '\App\Service\HelloService');
    }
}
