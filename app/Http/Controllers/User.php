<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }
}
