<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelecehanController;
use App\Http\Controllers\PerundunganController;
use App\Http\Controllers\RegisterController;
 
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



Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('postlogin' ,[LoginController::class, 'login'])->name('authLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('regis', [RegisterController::class, 'index'])->name('regis');
Route::post('register' ,[RegisterController::class, 'register'])->name('register');

Route::get('pelecehan', [PelecehanController::class, 'index'])->name('pelecehan');
Route::post('insert_pelecehan', [PelecehanController::class, 'store'])->name('insert_pelecehan');

Route::get('perundungan', [PerundunganController::class, 'index'])->name('perundungan');
Route::post('insert_perundungan', [PerundunganController::class, 'store'])->name('insert_perundungan');

Route::get('main', function () {
    return view('layouts.main');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('km', function () {
    return view('km');
});

Route::get('riwayat', function () {
    return view('riwayat');
});


Route::get('ulasan', function () {
    return view('ulasan');
});