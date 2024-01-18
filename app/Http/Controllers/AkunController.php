<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pagin = 4;
        $user = Auth::user();
        $akun = User::where('id', 'LIKE', '%' . $keyword . '%')
            ->orWhere('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('email', 'LIKE', '%' . $keyword . '%')
            ->orWhere('username', 'LIKE', '%' . $keyword . '%')
            ->sortable()
            ->paginate($pagin);
        // $stt = Stt::get();

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return view('akun.index', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return view('stt.app', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }

    // public function edit($id)
    // {
    //     $akun = User::find($id);
    //     return view('akun.edit', compact(['akun']))->with([
    //         'user' => Auth::user()
    //     ]);
    // }

    // public function update($id, Request $request)
    // {
    //     $akun = User::find($id);
    //     $akun->update($request->except(['_token', 'submit']));
    //     return redirect('/akun/index')->with([
    //         'user' => Auth::user()
    //     ]);
    // }

    public function edit($id)
    {
        $akun = User::find($id);
        // $akun = [
        //     'id' => $id,
        //     'email' => $user->email,
        //     'name' => $user->name,
        //     'username' => $user->username,
        //     'password' => $user->password,
        //     'profile_image' => $user->profile_image,
        //     'level' => $user->level
        // ];

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return view('akun.edit', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return view('stt.app', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            }
        }
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

    public function destroy($id)
    {
        $akun = User::find($id);
        $akun->delete();
        return redirect('/akun/index')->with([
            'user' => Auth::user()
        ]);
    }

    public function detail($id)
    {
        $akun = User::find($id);
        // return view('akun.detail', compact(['akun']))->with([
        //     'user' => Auth::user()
        // ]);

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return view('akun.detail', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return view('stt.app', compact(['akun']))->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }
}
