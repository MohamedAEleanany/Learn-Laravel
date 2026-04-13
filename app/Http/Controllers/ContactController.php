<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(StoreContactRequest $request)
    {
        // dd($request->all());
    //   $validedData =   $request->validate([
    //         'first_name'=> 'required|string|min:3|max:50',
    //         'last_name' => 'required|string|min:3|max:50',
    //         'email' => 'required|email',
    //         'message' => 'required|max:255'

    //     ],[
    //         'first_name.required' => "first name required ! ",
    //         'last_name.required' => "the last name is required",
    //         'email.email'  => " the email must as @ like @gmail.com" 
    //     ]);
    //     dd($validedData);

   $validedData = $request->validated();
   dd($validedData);
    }

    public function home()
    {
        return view('home');
    }
}
