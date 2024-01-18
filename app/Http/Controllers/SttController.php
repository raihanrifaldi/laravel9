<?php

namespace App\Http\Controllers;

use App\Models\Stt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SttController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pagin = 5;
        $user = Auth::user();
        $stt = Stt::where('usid', 'LIKE', $keyword)
            ->orWhere('event', 'LIKE', '%' . $keyword . '%')
            ->orWhere('time', 'LIKE', '%' . $keyword . '%')
            ->sortable()
            ->paginate($pagin);
        // $stt = Stt::get();
        return view('stt.index', compact(['stt']))->with([
            'user' => Auth::user()
        ]);
    }

    public function indexforuser(Request $request)
    {
        $keyword = $request->keyword;
        $pagin = 5;
        $user = Auth::user();
        $stt = Stt::where('usid', 'LIKE', $user->id)
            ->Where('event', 'LIKE', '%' . $keyword . '%', 'AND', 'usid', 'LIKE', $user->id)
            // ->Where('time', 'LIKE', '%' . $keyword . '%',  'AND', 'usid', 'LIKE', $user->id)
            ->sortable()
            ->paginate($pagin);
        // $stt = Stt::get();
        return view('stt.index', compact(['stt']))->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        return view('stt.insert')->with([
            'user' => Auth::user()
        ]);
    }

    // public function inserts()
    // {
    //     return view('stt.inserts')->with([
    //         'user' => Auth::user()
    //     ]);
    // }

    public function app()
    {
        return view('stt.app')->with([
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request)
    {

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                Stt::create($request->except(['_token', 'submit']));
                return redirect('/stt')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                Stt::create($request->except(['_token', 'submit']));
                return redirect('/stt/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }

    public function edit($id)
    {
        $stt = Stt::find($id);
        return view('stt.edit', compact(['stt']))->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id, Request $request)
    {
        $stt = Stt::find($id);
        $stt->update($request->except(['_token', 'submit']));
        // return redirect('/stt')->with([
        //     'user' => Auth::user()
        // ]);

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect('/stt')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return redirect('/stt/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $stt = Stt::find($id);
        $stt->delete();
        // return redirect('/stt')->with([
        //     'user' => Auth::user()
        // ]);

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect('/stt')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return redirect('/stt/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }

        // return response()->json(['status' => 'Data berhasil di hapus!']);
    }

    public function detail($id)
    {
        $stt = Stt::find($id);
        return view('stt.detail', compact(['stt']))->with([
            'user' => Auth::user()
        ]);
    }
}
