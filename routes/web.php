<?php

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

Route::get('/', function () {
    return view('welcome');
});

// route layananpelanggan
Route::get('/ulasanpelanggan', 'UlasanpelangganController@ulasan');
Route::get('/keluhanpelanggan', 'KeluhanpelangganController@pengaduan');
Route::get('/pengembalian', 'PengembalianController@pengembalian');
Route::post('keluhanpelanggan/create','KeluhanpelangganController@create');
Route::post('ulasanpelanggan/create','UlasanpelangganController@create');
Route::post('pengembalian/create','PengembalianController@create');