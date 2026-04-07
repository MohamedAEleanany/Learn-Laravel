<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class UserController extends Controller
{
    public function index()
    {
        dd("Hello form User Controller ");
    }

    public function testblade ()
    {
       // return view('users/index');
       $data = '<h1>Mohamed Amr</h1>';
       // return view('users.index',['myuserdata' => $data]);
        return view('users.index',compact('data'));
    }
}
