<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function(){
    return view('layouts/app');
});

//put post controller into a group.
Route::group(['middleware'=>'web'], function(){
    Route::resource('/posts', PostController::class);
});



