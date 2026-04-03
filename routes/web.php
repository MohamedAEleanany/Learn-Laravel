<?php

use App\Http\Controllers\Test1Controller;
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
//======== Route Parameter{name} ==================
//{name?} ? this expain this in route can be exist or not 
//Note => need to add Defult name in Method 
Route::get('/test/name/{name?}/{age?}',[TestController::class , 'printName'])->name('test.view');


Route::controller(Test1Controller::class)->group(function(){
    Route::get('/testt1','test1');
    Route::get('/testt2','test2');
});