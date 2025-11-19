<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LogInController::class, 'form'])->name('login');
Route::resource('users', UserController::class);
