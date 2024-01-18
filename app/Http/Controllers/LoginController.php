<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect()->intended('AdminController')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return redirect()->intended('UserController')->with([
                    'user' => Auth::user()
                ]);
            }
        }

        return view('login.view_login');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username Can Not Be Empty',
                'password.required' => 'Password Can Not Be Empty'
            ]
        );

        $kredensial = $request->only('username', 'password');
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('AdminController');
            } elseif ($user->level == '2') {
                return redirect()->intended('UserController');
            }

            return redirect()->intended('/login')->with([
                'user' => Auth::user()
            ]);
        }

        return back()->withErrors([
            'username' => 'Incorrect Username',
            'password' => 'Incorrect Password'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with([
            'user' => Auth::user()
        ]);
    }

    public function admin()
    {
        return View('admin.admin_home')->with([
            'user' => Auth::user()
        ]);
    }

    public function user()
    {
        return View('user.user_home')->with([
            'user' => Auth::user()
        ]);
    }
}
