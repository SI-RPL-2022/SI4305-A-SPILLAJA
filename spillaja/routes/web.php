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
    return view('layouts.login.welcome');
});

Route::get('login', function () {
    return view('layouts.login.login');
});

Route::get('regis', function () {
    return view('layouts.login.regis');
});

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