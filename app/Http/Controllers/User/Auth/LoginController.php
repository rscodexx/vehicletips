<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
}
