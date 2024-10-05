<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


Route::get('/profile/{id}', [ProfileController::class, 'getProfile']);


Route::get('/profile', [ProfileController::class, 'getAllProfile']);

Route::get('/users', [UserController::class, 'getAllUsers']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function(){
    return view("welcome");
});

Route::get("/hello-world", function(){
    return "<h1>Hello World</h1>";
});

Route::get('/greet/{name}', [GreetController::class, 'greet']);

Route::get('/greet-with-view', [GreetController::class, 'GreetWithView']);

Route::get('/post', [PostController::class, 'getAllPost']);