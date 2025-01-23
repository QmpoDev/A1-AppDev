<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/home', function () {
    return view('home');
    
});

Route::get('/portfolio', function () {
    return view('portfolio');
    
});

Route::post('/register', [UserController::class, 'register']);