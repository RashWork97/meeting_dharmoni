<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;

Route::get('/main', function () {
    return view('main.home');
});

Route::get('/login', [AuthController::class, 'showLogin']) ->name('login.page');
Route::get('/register', [AuthController::class, 'showRegister']) ->name('register.page');
Route::post('/login', [AuthController::class, 'login']) ->name('login');
Route::post('/register', [AuthController::class, 'register']) ->name('register');

Route::get('/main', [AppController::class, 'index']) -> name('main.home');