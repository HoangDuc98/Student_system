<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function showFormLogin()
    {

        return view('login');

    }

    function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email = $request->email;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password' => $password
        ];

        if (!Auth::attempt($data)) {
            Session::flash('login_error', 'Tai khoan khong chinh xac!');

            return redirect()->route('login');
        }
        toastr()->success('Đăng nhập thành công!');

        return redirect()->route('home');
    }

    function logout(): \Illuminate\Http\RedirectResponse
    {

        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
