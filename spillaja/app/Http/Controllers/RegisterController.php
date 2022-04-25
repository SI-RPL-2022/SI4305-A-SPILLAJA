<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('layouts.login.regis');
    }
    public function register(Request $request){
    //   dd($request->all());
        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login');
    }
}
