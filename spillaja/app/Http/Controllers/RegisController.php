<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function index()
    {
        return view('layouts.login.regis');
    }
}
