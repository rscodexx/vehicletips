<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function loginDo(Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember = $request->input('remember', false);

        $validator = Validator::make($credentials, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt($credentials, $remember)) {
            //return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Usuário e/ou senha inválidas',
        ]);

    }
}
