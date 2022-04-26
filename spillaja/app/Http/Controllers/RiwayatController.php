<?php

namespace App\Http\Controllers;
use App\Models\Pelecehan;
use App\Models\Perundungan;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){
        $pelecehan = Pelecehan::all();
        return view('riwayat', compact("pelecehan"));
    }
    public function show($id){
        $pelecehan = Pelecehan::find($id);
        return view('driwayat',compact("pelecehan"));
    }
}
