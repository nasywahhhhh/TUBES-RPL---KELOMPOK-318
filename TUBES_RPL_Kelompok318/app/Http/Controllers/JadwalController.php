<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = jadwal::all();
        return view('jadwal', ['jadwal' => $jadwal]);
    }

    public function index_dashboard()
    {
        // join jadwal dan menu
        $jadwal = jadwal::all();
        $menu = Menu::all();
        return view('dashboard.jadwal', ['jadwal' => $jadwal, 'menu' => $menu]);
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
            'waktu' => 'required',
            'lunch' => 'required',
            'dinner' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        jadwal::create([
            'waktu' => $request->waktu,
            'lunch' => $request->lunch,
            'dinner' => $request->dinner,
        ]);

        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jadwal = jadwal::find($id);
        return $jadwal;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $jadwal = jadwal::find($id);
        $jadwal->waktu = $request->waktu;
        $jadwal->lunch = $request->lunch;
        $jadwal->dinner = $request->dinner;
        $jadwal->save();

        return redirect()->back()->with('success', 'Jadwal berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal = jadwal::find($id);
        $jadwal->delete();

        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }
}
