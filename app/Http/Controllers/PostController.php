<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // use to display the data of all Posts like => Select * from Posts  
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view  => use to goto the page that has the form 
         dd('Hello from create function ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // use to store the data 
         dd('Hello from store function ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // specific post 
         dd('Hello from show function ');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view  => use to goto the page that has the form and the data to edit
         dd('Hello from edit function ');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // submit the editing 
         dd('Hello from update function ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete post from database 
         dd('Hello from destroy function ');
    }
}
