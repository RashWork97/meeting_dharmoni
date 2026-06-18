<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/main', function () {
    return view('main.home');
});

Route::get('/meetingRoom', function(){
    return view('main.meetingRoom');
});

Route::get('/application', function(){
    return view('main.application');
});

Route::get('/login', [AuthController::class, 'showLogin']) ->name('login.page');
Route::get('/register', [AuthController::class, 'showRegister']) ->name('register.page');
Route::post('/login', [AuthController::class, 'login']) ->name('login');
Route::post('/register', [AuthController::class, 'register']) ->name('register');
Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');

Route::get('/main', [AppController::class, 'index']) -> name('main.home');