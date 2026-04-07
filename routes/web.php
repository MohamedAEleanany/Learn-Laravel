<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIfNameIsAhmed;
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
//group Route 
Route::controller(Test1Controller::class)->prefix('/test')->name('test.')->group(function(){
    Route::get('/testt1','test1')->name('index');
    Route::get('/testt2','test2');
});

Route::get('/testcon',[UserController::class,'index']);
// Test singel Action Controller using the command : php artisan make:controller SingleController --invokable 
Route::get('/test/singlecon',SingleController::class)->middleware(CheckIfNameIsAhmed::class);
//Route rescources that has 7 function (index - create - store - show - upadte - edit - destroy )
//-> except to remove index from route
//->any show only in the any 
 //Route::resource('posts', PostController::class)->only('index');
 //Route::resource('posts', PostController::class)->only(['index' , 'show']);
Route::resource('posts', PostController::class);

Route::get('testred',[Test1Controller::class,'test2'])->name('login');

Route::get('/users/index', [UserController::class, 'testblade']);