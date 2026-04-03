<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        dd( 'Hello Mohamed');
    }

    public function testView()
    {
        return view('test');
    }

    public function printName($name = 'Defult' , $age = 18)
    {
        dd("Hello $name and your age is $age");
    }
}
