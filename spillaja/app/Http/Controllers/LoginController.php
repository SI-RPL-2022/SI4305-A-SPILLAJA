<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('layouts.login.login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            return redirect('/beranda');
        }else{
          
            return redirect('/login');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
