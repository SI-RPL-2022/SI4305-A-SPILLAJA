<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authentication_Controller extends Controller
{
    public function index()
    {
        return view('layouts.login.welcome');
    }

    public function register()
    {
        return view('layouts.login.regis');
    }

    public function login()
    {
        return view('layouts.login.login');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required',
            'password' => 'required|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/Login');

    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/HomeAdmin');
            } elseif (auth()->user()->is_dokter == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/HomeAdmin');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/Beranda');
            }
        } else {
            return back()->with('loginError', 'Gagal Login Email atau Password Salah!');
        }

        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}