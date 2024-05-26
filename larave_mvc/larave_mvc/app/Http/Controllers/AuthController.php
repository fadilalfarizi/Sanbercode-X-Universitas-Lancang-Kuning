<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('/home');
    }

    public function proses(Request $request)
    {
        return redirect()->route('home', [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ]);
    }

    public function tampil(Request $request)
    {
        return view('home', [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ]);
    }
}
