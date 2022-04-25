<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
 
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
    return view('layouts.login.welcome');
});

Route::get('regis', [RegisController::class, 'index']);
Route::post('regis', [RegisController::class, 'authenticate']);

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('main', function () {
    return view('layouts.main');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('pelecehan', function () {
    return view('pelecehan');
});

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

Route::get('checkout', function () {
    return view('checkout');
});