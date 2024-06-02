<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = cast::all();
        return view('cast.tampil', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ],
       [
                'nama.required' => 'Nama Harus di Isi',
                'umur.required' => 'Umur Harus di Isi',
                'bio.required' => 'Bio Harus di Isi',

        ]);
        $cast = new cast;
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');

        $cast->save();

        return redirect('/cast');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = cast::find($id);

        return view('cast.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = cast::find($id);

        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ],
       [
                'nama.required' => 'Nama Harus di Isi',
                'umur.required' => 'Umur Harus di Isi',
                'bio.required' => 'Bio Harus di Isi',

        ]);
        cast::where('id',$id)
        ->update(
            [
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio')
            ]
            );
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cast::where('id',$id)->delete();

        return redirect('/cast');
    }
}