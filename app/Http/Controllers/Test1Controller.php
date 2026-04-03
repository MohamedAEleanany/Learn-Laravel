<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test1Controller extends Controller
{
   public function test1()
   {
    return dd('hello');
   }
   public function test2()
   {
    return dd('Welcome');
   }
}
