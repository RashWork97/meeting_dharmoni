<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'showLogin']) ->name('login.page');
Route::get('/register', [AuthController::class, 'showRegister']) ->name('register.page');
Route::post('/login', [AuthController::class, 'login']) ->name('login');
Route::post('/register', [AuthController::class, 'register']) ->name('register');