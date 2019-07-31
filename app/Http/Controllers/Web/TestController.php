<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Hello;
use App\Events\Hello as HelloEvent;

class TestController extends Controller
{
    protected $hello;
    public function __construct(Hello $hello)
    {
        $this->hello = $hello;
    }

    function test(){
        event(new HelloEvent('kate'));
    }
}
