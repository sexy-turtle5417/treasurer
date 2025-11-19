<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/login', [LogInController::class, 'form'])
    ->name('login');

Route::post('/login', [LogInController::class, 'authenticate'])
    ->name('authenticate');

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home')
    ->middleware('auth');
