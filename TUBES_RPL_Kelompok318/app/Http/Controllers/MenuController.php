<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        // join menu and kategori
        $menu = Menu::join('kategori', 'menu.kategori_id', '=', 'kategori.id')
            ->select('menu.*', 'kategori.nama as kategori')
            ->get();

        // sorting menu by kategori
        $menuSorting = [];
        foreach ($menu as $m) {
            $menuSorting[$m->kategori][] = $m;
        }
        $kategori = Kategori::all();
        // dd($menuSorting);
        return view('menu', ['menu' => $menuSorting, 'kategori' => $kategori]);
    }

    public function index_dashboard()
    {
        // menu join kategori
        $menu = Menu::join('kategori', 'menu.kategori_id', '=', 'kategori.id')
            ->select('menu.*', 'kategori.nama as kategori')
            ->get();
        $kategori = Kategori::all();
        return view('dashboard.menu', ['menu' => $menu, 'kategori' => $kategori]);
    }

    public function show(Request $request, $id)
    {
        $menu = Menu::find($id);
        return $menu;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        // upload gambar
        $file = $request->file('gambar');
        $file_name = time() . '.' . $file->extension();
        $file->move(public_path('images'), $file_name);


        $menu = new Menu();
        $menu->nama = $request->nama;
        $menu->kategori_id = $request->kategori_id;
        $menu->gambar = $file_name;
        $menu->save();

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        // upload gambar
        $file = $request->file('gambar');
        $file_name = time() . '.' . $file->extension();
        $file->move(public_path('images'), $file_name);

        $menu = Menu::find($id);
        $menu->nama = $request->nama;
        $menu->kategori_id = $request->kategori_id;
        $menu->gambar = $file_name;
        $menu->save();

        return redirect()->back()->with('success', 'Menu berhasil diupdate');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->back()->with('success', 'Menu berhasil dihapus');
    }
}
