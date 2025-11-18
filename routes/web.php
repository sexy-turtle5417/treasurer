<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::resource('users', UserController::class);

Route::get('/login', function () {
    $userCount = User::count();
    return $userCount == 0 ? to_route('users.create') : view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
