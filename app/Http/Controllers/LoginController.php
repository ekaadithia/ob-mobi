<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function geting()
    {
        return view('auth.login', [
            'title' => 'Login',
            'bodyclass' => 'login'
        ]);
    }
}
