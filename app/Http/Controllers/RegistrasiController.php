<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('register.view_register');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'profile_image' => 'mimes:jpg,png,jpeg|image|max:2048'
            ],
            [
                'email.required' => 'E-mail Can Not Be Empty',
                'name.required' => 'Name Can Not Be Empty',
                'username.required' => 'Username Can Not Be Empty',
                'password.required' => 'Password Can Not Be Empty'
            ]
        );

        // dd($request->except('_token', 'submit'));
        // User::create($request->except(['_token', 'submit']));
        // return redirect('/login');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('uploads');
        } else {
            $path = '';
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'profile_image' => $path,
            'level' => $request->level,
        ]);
        $user->save();

        // dd($request->except('_token', 'submit'));
        // User::create($request->except(['_token', 'submit']));
        return redirect('/login');
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
}
