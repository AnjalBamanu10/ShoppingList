<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::post('signup-user', [UserController::class, 'signupUser'])->name('signupUser');
Route::post('login-user', [UserController::class, 'loginUser'])->name('loginUser');



