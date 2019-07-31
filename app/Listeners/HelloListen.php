<?php

namespace App\Listeners;

use App\Events\Hello;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloListen //implements ShouldQueue
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
     * @param  Hello  $event
     * @return void
     */
    public function handle(Hello $event)
    {
        dump($event->name);
    }
}
