<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class V2Controller extends Controller
{
    public function index(Request $request)
    {
        return view('v2.index')->with([
            'user' => Auth::user()
        ]);
    }
}
