<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'showLogin']) ->name('login.page');
Route::get('/register', [AuthController::class, 'showRegister']) ->name('register.page');