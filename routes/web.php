<?php

use App\Http\Controllers\AvatarUploadController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class)
    ->only(['create', 'store']);

Route::middleware('auth')->group(function () {
    Route::put('/avatar', [AvatarUploadController::class, 'update'])
        ->name('avatar.update');

    Route::get('/avatar/edit', [AvatarUploadController::class, 'edit'])
        ->name('avatar.edit');

    Route::delete('/logout', LogOutController::class)
        ->name('logout');

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::resource('users', UserController::class)
        ->except(['create', 'store']);
});

Route::get('/login', [LogInController::class, 'form'])
    ->name('login');

Route::post('/login', [LogInController::class, 'authenticate'])
    ->name('authenticate');
