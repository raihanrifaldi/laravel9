<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Layout extends Controller
{
    public function index()
    {
        return View('layout.main')->with([
            'user' => Auth::user()
        ]);
    }

    public function home()
    {
        return View('stt.app')->with([
            'user' => Auth::user()
        ]);
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

    public function detail()
    {
        $user = Auth::user();
        $akun = User::find($user->id);
        return view('layout.akun_detail', compact(['akun']))->with([
            'user' => Auth::user()
        ]);
    }

    public function edit($id)
    {


        $akun = User::find($id);
        return view('layout.edit_akun', compact(['akun']))->with([
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $email = $request->email;
        $name = $request->name;
        $username = $request->username;
        $password = Hash::make($request->password);
        // $profile_image = $request->profile_image;
        $level = $request->level;

        $validateData = $request->validate(
            [
                'profile_image' => 'mimes:jpg,png,jpeg|image|max:2048'
            ]
        );


        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('uploads');
        } else {
            $path = '';
        }


        $user = User::find($id);
        $user->email = $email;
        $user->name = $name;
        $user->username = $username;
        $user->password = $password;
        $user->profile_image = $path;
        $user->level = $level;

        $user->save();

        // dd($request->except('_token', 'submit'));
        // User::create($request->except(['_token', 'submit']));
        return redirect('/akun/index');
    }
}
