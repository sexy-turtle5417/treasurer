<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LogInController extends Controller
{
    public function form(): View
    {
        return view('auth.login');
    }
}
