<?php

use App\Http\Controllers\AvatarUploadController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::put('/avatar', [AvatarUploadController::class, 'update'])
    ->name('avatar.update');

Route::get('/avatar', [AvatarUploadController::class], 'edit')
    ->name('avatar.edit');

Route::get('/login', [LogInController::class, 'form'])
    ->name('login');

Route::post('/login', [LogInController::class, 'authenticate'])
    ->name('authenticate');

Route::delete('/logout', LogOutController::class)
    ->name('logout');

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home')
    ->middleware('auth');
