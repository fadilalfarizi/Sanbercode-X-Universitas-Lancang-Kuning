<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view ('gudang.dashboard');
    }

    public function tables()
    {
        return view ('gudang.tabel');
    }

    
    public function data()
    {
        return view ('gudang.data-tabel');
    }
}
