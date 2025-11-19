<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LogInController extends Controller
{
    public function form()
    {
        $userCount = User::count();

        if ($userCount < 1)
            return to_route('users.create');
        return view('auth.login');
    }

    public function authenticate(SignInRequest $request)
    {
        $credentials = $request->validated();
        $remember = $request->has('remember_me');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return to_route('home');
        }

        return back()->withErrors([
            "email" => 'Incorrect email or password'
        ])->onlyInput('email');
    }
}
