<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/daftar', [PendaftaranController::class, 'index']);
Route::get('/hasil', [PendaftaranController::class, 'hasil']);

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/mendaftar', function () {
    return view('admin.mendaftar');
});

Route::get('/login', function () {
    return view('login');
});


// Route Halaman admin
Route::middleware(['auth'])->group(function () {
});
