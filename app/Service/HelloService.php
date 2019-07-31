<?php
namespace App\Service;
use App\Contracts\Hello;

class HelloService implements Hello
{
    public function hello()
    {
        dump('hello');
    }

    public function world(){
        dump('world');
    }

    public static function helloWorld(){
        dump('hello world');
    }
}
