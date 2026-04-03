<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',function(){
   dd('Heeloo');
});

//go to controller to function that return die and dump
Route::get('test1', [TestController::class,'test']);
//go to controller to function that return view
Route::get('testview', [TestController::class , 'testview']);
//short hand route for goto view 
Route::view('testview1', 'test');
//redirect for go to specfic destintation
Route::redirect('test2','/testview1');