<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];
        $pengunjung = Pengunjung::find(1);

        return view('dashboard.home', ['pengunjung' => $pengunjung, 'widget' => $widget]);
    }
}
