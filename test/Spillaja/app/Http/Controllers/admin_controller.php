<?php

namespace App\Http\Controllers;

use App\Models\psikiater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class admin_controller extends Controller
{
    public function index()
    {
        return view('admin.berandaadmin');
    }

    public function regis_psikiater(Request $request)
    {   
        $validatedData = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required',
            'password' => 'required',
            'pendidikan' => 'required',
            'pengalaman_kerja' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        psikiater::create($validatedData);
        Alert::success('Registrasi Berhasil', 'Silahkan cek kembali data psikiater yang sudah dimasukan.');
        return redirect('/Beranda-Admin');
    }
}