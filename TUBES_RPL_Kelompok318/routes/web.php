<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (route('home')) {
        $pengunjung = Pengunjung::find(1);
        $pengunjung->jumlah_pengunjung = $pengunjung->jumlah_pengunjung + 1;
        $pengunjung->save();
    }
    return view('home');
})->name('home');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/konsultasi', function () {
    $pengunjung = Pengunjung::find(1);
    $pengunjung->jumlah_konsultasi = $pengunjung->jumlah_konsultasi + 1;
    $pengunjung->save();
    return view('konsultasi');
})->name('konsultasi');

Route::get('/order', function () {
    $pengunjung = Pengunjung::find(1);
    $pengunjung->jumlah_order = $pengunjung->jumlah_order + 1;
    $pengunjung->save();
    return view('order');
})->name('order');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/t&c', function () {
    return view('tandc');
})->name('tandc');

Route::get('/testiinfluencer', function () {
    return view('testiinfluencer');
})->name('testiinfluencer');

Route::get('/testicustomer', function () {
    return view('testicustomer');
})->name('testicustomer');

Route::get('/ourproduct', function () {
    return view('ourproduct');
})->name('ourproduct');

// menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('dashboard/menu', [MenuController::class, 'index_dashboard'])->name('menu.index_dashboard')->middleware(['admin', 'auth']);
Route::get('dashboard/menu/{id}', [MenuController::class, 'show'])->name('menu.show')->middleware(['admin', 'auth']);
Route::post('/dashboard/menu', [MenuController::class, 'store'])->name('menu.store')->middleware(['admin', 'auth']);
Route::put('/dashboard/menu', [MenuController::class, 'update'])->name('menu.update')->middleware(['admin', 'auth']);
Route::delete('/dashboard/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy')->middleware(['admin', 'auth']);

// user
Route::get('/dashboard/user', [UserController::class, 'index'])->name('user.index')->middleware(['admin', 'auth']);
Route::get('/dashboard/user/{id}', [UserController::class, 'show'])->name('user.show')->middleware(['admin', 'auth']);
Route::post('/dashboard/user', [UserController::class, 'store'])->name('user.store')->middleware(['admin', 'auth']);
Route::put('/dashboard/user', [UserController::class, 'update'])->name('user.update')->middleware(['admin', 'auth']);
Route::delete('/dashboard/user/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(['admin', 'auth']);

// kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/dashboard/kategori', [KategoriController::class, 'index_dashboard'])->name('kategori.index_dashboard')->middleware(['admin', 'auth']);
Route::get('/dashboard/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show')->middleware(['admin', 'auth']);
Route::post('/dashboard/kategori', [KategoriController::class, 'store'])->name('kategori.store')->middleware(['admin', 'auth']);
Route::put('/dashboard/kategori', [KategoriController::class, 'update'])->name('kategori.update')->middleware(['admin', 'auth']);
Route::delete('/dashboard/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy')->middleware(['admin', 'auth']);

// artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/dashboard/artikel', [ArtikelController::class, 'index_dashboard'])->name('artikel.index_dashboard')->middleware(['admin', 'auth']);
Route::get('/dashboard/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show')->middleware(['admin', 'auth']);
Route::post('/dashboard/artikel', [ArtikelController::class, 'store'])->name('artikel.store')->middleware(['admin', 'auth']);
Route::put('/dashboard/artikel', [ArtikelController::class, 'update'])->name('artikel.update')->middleware(['admin', 'auth']);
Route::delete('/dashboard/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy')->middleware(['admin', 'auth']);

// jadwal
Route::get('/schedule', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/dashboard/jadwal', [JadwalController::class, 'index_dashboard'])->name('jadwal.index_dashboard')->middleware(['admin', 'auth']);
Route::get('/dashboard/jadwal/{id}', [JadwalController::class, 'show'])->name('jadwal.show')->middleware(['admin', 'auth']);
Route::post('/dashboard/jadwal', [JadwalController::class, 'store'])->name('jadwal.store')->middleware(['admin', 'auth']);
Route::put('/dashboard/jadwal', [JadwalController::class, 'update'])->name('jadwal.update')->middleware(['admin', 'auth']);
Route::delete('/dashboard/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy')->middleware(['admin', 'auth']);


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('admin');

Route::get('/dashboard/profile', 'ProfileController@index')->name('profile');
Route::put('/dashboard/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
