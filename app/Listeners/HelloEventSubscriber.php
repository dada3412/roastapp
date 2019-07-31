<?php

namespace App\Listeners;

use App\Events\Hello;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloEventSubscriber
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

    public function hello($event)
    {
        dump('----34' . $event->name);
        return false;
    }
    public function hello1($event)
    {
        dump('----1234' . $event->name);
    }
    /**
     * Handle the event.
     *
     * @param  Hello  $event
     * @return void
     */
    public function subscribe($event)
    {
        $event->listen('App\Events\Hello','App\Listeners\HelloEventSubscriber@hello');
        $event->listen('App\Events\Hello','App\Listeners\HelloEventSubscriber@hello1');
    }
}
