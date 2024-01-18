<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sd;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SdController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pagin = 5;
        $user = Auth::user();
        $sd = Sd::where('usid', 'LIKE', $keyword)
            ->orWhere('event', 'LIKE', '%' . $keyword . '%')
            ->orWhere('time', 'LIKE', '%' . $keyword . '%')
            ->sortable()
            ->paginate($pagin);
        // $stt = Stt::get();
        return view('sd.index', compact(['sd']))->with([
            'user' => Auth::user()
        ]);
    }

    public function indexforuser(Request $request)
    {
        $keyword = $request->keyword;
        $pagin = 5;
        $user = Auth::user();
        $sd = Sd::where('usid', 'LIKE', $user->id)
            ->Where('event', 'LIKE', '%' . $keyword . '%', 'AND', 'usid', 'LIKE', $user->id)
            // ->Where('time', 'LIKE', '%' . $keyword . '%',  'AND', 'usid', 'LIKE', $user->id)
            ->sortable()
            ->paginate($pagin);
        // $sd = Sd::get();
        return view('sd.index', compact(['sd']))->with([
            'user' => Auth::user()
        ]);
    }

    public function inserts()
    {
        return view('sd.inserts')->with([
            'user' => Auth::user()
        ]);
    }

    public function speaker()
    {
        return view('sd.iframegradio')->with([
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request)
    {

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                Sd::create(
                    [
                        'usid' => $request->usid,
                        'event' => $request->event,
                        'time' => $request->time,
                        'speech' => $request->speech,
                        'original' => $request->speech,

                    ],
                    $request->except(['_token', 'submit'])
                );
                return redirect('/sd')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                Sd::create(
                    [
                        'usid' => $request->usid,
                        'event' => $request->event,
                        'time' => $request->time,
                        'speech' => $request->speech,
                        'original' => $request->speech,

                    ],
                    $request->except(['_token', 'submit'])
                );
                return redirect('/sd/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }

    public function edit($id)
    {
        $sd = Sd::find($id);
        return view('sd.edit', compact(['sd']))->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id, Request $request)
    {
        $sd = Sd::find($id);
        $sd->update($request->except(['_token', 'submit']));
        // return redirect('/sd')->with([
        //     'user' => Auth::user()
        // ]);

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect('/sd')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return redirect('/sd/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $sd = Sd::find($id);
        $sd->delete();
        // return redirect('/sd')->with([
        //     'user' => Auth::user()
        // ]);

        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect('/sd')->with([
                    'user' => Auth::user()
                ]);
            } elseif ($user->level == '2') {
                return redirect('/sd/indexforuser')->with([
                    'user' => Auth::user()
                ]);
            }
        }

        // return response()->json(['status' => 'Data berhasil di hapus!']);
    }

    public function detail($id)
    {
        $sd = Sd::find($id);
        return view('sd.detail', compact(['sd']))->with([
            'user' => Auth::user()
        ]);
    }
}
