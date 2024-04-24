<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts', PostController::class);

Route::get('/app', function(){
    return view('layouts/app');
});

Route::get('/create', function(){
    return view('create');
});



