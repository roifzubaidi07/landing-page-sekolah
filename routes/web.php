<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LeaderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $path = public_path()."/storage/json/company-profile.json"; // ie: /var/www/laravel/
    $json = json_decode(file_get_contents($path), true);
    return view('halaman.beranda',[
        'title' => 'beranda',
        'json' => $json
    ]);
});
Route::get('/profil', function () {
    return view('halaman.profil',[
        'title' => 'profil',
        'leaders' => DB::table('leaders')->get()
    ]);
});
Route::get('/galeri', function () {
    return view('halaman.galeri',[
        'title' => 'galeri',
        'galeries' => DB::table('galeries')->get()
    ]);
});
Route::get('/ekstrakurikuler', function () {
    return view('halaman.ekstrakurikuler',[
        'title' => 'ekstrakurikuler'
    ]);
});
Route::get('/kontak', function () {
    return view('halaman.kontak',[
        'title' => 'kontak'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {    
    Route::get('admin', function () {
        return view('halaman.admin.index');
    })->name('admin');
    Route::resource('admin/jabatan', LeaderController::class);
    Route::resource('admin/galeri', GaleryController::class);
});
