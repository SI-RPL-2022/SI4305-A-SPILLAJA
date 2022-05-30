<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main_Controller;
use App\Http\Controllers\admin_controller;
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
Route::get('/Riwayat-Detail-Pelecehan', [main_Controller::class, 'riwayatDetail_pelecehan']);
Route::get('/Riwayat-Detail-Perundungan', [main_Controller::class, 'riwayatDetail_perundungan']);
Route::get('/Kesehatan-Mental', [main_Controller::class, 'kesehatan_mental']);

// Admin
Route::get('/Beranda-Admin', [admin_controller::class, 'index'])->middleware('is_admin');
Route::post('/Beranda-Admin', [admin_controller::class, 'regis_psikiater'])->middleware('is_admin');


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