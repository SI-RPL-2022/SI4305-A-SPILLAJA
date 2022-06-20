<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main_Controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\dokter_controller;
use App\Http\Controllers\authentication_Controller;
 
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


// Login & Register
Route::get('/', [authentication_Controller::class, 'index']);
Route::get('/Register', [authentication_Controller::class, 'register']);
Route::post('/Register', [authentication_Controller::class, 'store']);
Route::get('/Login', [authentication_Controller::class, 'login']);
Route::post('/Login', [authentication_Controller::class, 'authenticate']);
Route::post('/Logout', [authentication_Controller::class, 'logout']);

// Main
Route::get('/Beranda', [main_Controller::class, 'index']);
Route::get('/Pelecehan', [main_Controller::class, 'pelecehan']);
Route::post('/Pelecehan', [main_Controller::class, 'store_pelecehan_seksual']);
Route::get('/Perundungan', [main_Controller::class, 'perundungan']);
Route::post('/Perundungan', [main_Controller::class, 'store_bullying']);
Route::get('/Riwayat', [main_Controller::class, 'riwayat']);
Route::get('/Riwayat-Perundungann', [main_Controller::class, 'riwayat_perundungann']);
Route::get('/Riwayat-Pelecehann', [main_Controller::class, 'riwayat_pelecehann']);
Route::get('/Riwayat-Detail-Pelecehan', [main_Controller::class, 'riwayatDetail_pelecehan']);
Route::get('/Riwayat-Detail-Perundungan', [main_Controller::class, 'riwayatDetail_perundungan']);
Route::get('/Kesehatan-Mental', [main_Controller::class, 'kesehatan_mental']);
Route::get('/Resep', [main_controller::class, 'resep']);
Route::get('/Resep-Detail', [main_controller::class, 'resep_detail']);
Route::get('/Berita', [main_controller::class, 'halaman_berita']);
Route::get('/Artikel-Detail-Pasien', [main_controller::class, 'detail_halaman_berita']);

// Admin
Route::get('/Beranda-Admin', [admin_controller::class, 'index'])->middleware('is_admin');
Route::post('/Beranda-Admin', [admin_controller::class, 'regis_psikiater'])->middleware('is_admin');

// Dokter
Route::get('/Beranda-Dokter', [dokter_controller::class, 'index'])->middleware('is_dokter');
Route::get('/Pelecehan-Dokter', [dokter_controller::class, 'pelecehan_dokter'])->middleware('is_dokter');
Route::post('/Pelecehan-Dokter', [dokter_controller::class, 'store_pelecehan_seksual'])->middleware('is_dokter');
Route::get('/Perundungan-Dokter', [dokter_controller::class, 'perundungan_dokter'])->middleware('is_dokter');
Route::post('/Perundungan-Dokter', [dokter_controller::class, 'store_bullying'])->middleware('is_dokter');
Route::get('/Riwayat-Perundungan', [dokter_Controller::class, 'riwayat_perundungan'])->middleware('is_dokter');
Route::get('/Riwayat-Pelecehan', [dokter_Controller::class, 'riwayat_pelecehan'])->middleware('is_dokter');
Route::get('/Riwayat-Dokter', [dokter_controller::class, 'riwayat_dokter'])->middleware('is_dokter');
Route::get('/Riwayat-Detail-Perundungan-Dokter', [dokter_controller::class, 'riwayatDetailDokter_perundungan'])->middleware('is_dokter');
Route::get('/Riwayat-Detail-Pelecehan-Dokter', [dokter_controller::class, 'riwayatDetailDokter_pelecehan'])->middleware('is_dokter');
Route::get('/Resep-Dokter', [dokter_controller::class, 'resep_dokter'])->middleware('is_dokter');
Route::post('/Resep-Dokter', [dokter_controller::class, 'store_resep'])->middleware('is_dokter');
Route::get('/Berita-Dokter', [dokter_controller::class, 'berita_dokter'])->middleware('is_dokter');
Route::get('/Artikel-Dokter', [dokter_controller::class, 'artikel_dokter'])->middleware('is_dokter');
Route::post('/Artikel-Dokter', [dokter_controller::class, 'store_artikel'])->middleware('is_dokter');
Route::get('/Artikel-Detail-Dokter', [dokter_controller::class, 'detailartikel_dokter'])->middleware('is_dokter');


Route::get('km', function () {
    return view('km');
});

Route::get('riwayat', function () {
    return view('riwayat');
});

Route::get('perundungan', function () {
    return view('perundungan');
});

Route::get('ulasan', function () {
    return view('ulasan');
});