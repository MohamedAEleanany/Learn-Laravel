<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',function(){
   dd('Heeloo');
});


Route::get('test1', [TestController::class,'test']);

Route::get('testview', [TestController::class , 'testview']);