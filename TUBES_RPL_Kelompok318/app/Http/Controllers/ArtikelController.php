<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = artikel::all();
        return view('artikel', ['artikel' => $artikel]);
    }

    public function index_dashboard()
    {
        $artikel = artikel::all();
        return view('dashboard.artikel', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'url' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $file = $request->file('gambar');
        $file_name = time() . '.' . $file->extension();
        $file->move(public_path('images'), $file_name);

        $artikel = new artikel();
        $artikel->nama = $request->nama;
        $artikel->url = $request->url;
        $artikel->gambar = $file_name;
        $artikel->save();

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artikel = artikel::find($id);
        return $artikel;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'url' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $file = $request->file('gambar');
        $file_name = time() . '.' . $file->extension();
        $file->move(public_path('images'), $file_name);

        $artikel = artikel::find($id);
        $artikel->nama = $request->nama;
        $artikel->url = $request->url;
        $artikel->gambar = $file_name;
        $artikel->save();

        return redirect()->back()->with('success', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $artikel = artikel::find($id);
        $artikel->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }
}
