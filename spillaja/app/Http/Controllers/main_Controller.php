<?php

namespace App\Http\Controllers;

use App\Models\pelaporan_Bullying;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\pelaporan_pelecehanSeksual;

class main_Controller extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function pelecehan()
    {
        return view('pelecehan');
    }

    public function perundungan()
    {
        return view('perundungan');
    }

    public function riwayat()
    {
        return view('riwayat');
    }

    public function riwayatDetail()
    {
        return view('riwayatdetail');
    }

    public function store_pelecehan_seksual(Request $request)
    {   
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_korban' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_pelaku' => 'required',
            'tanggal_kejadian' => 'required',
            'judul_laporan' => 'required',
            'alamat_kejadian' => 'required',
        ]);

        pelaporan_pelecehanSeksual::create($validatedData);
        Alert::success('Laporan Berhasil Dikirim', 'Laporan akan dikirimkan ke pihak berwajib laporan balasan akan dikirim melalui email selambat-lambatnya 7x24 jam');
        return redirect('/Pelecehan');

        // dd($validatedData);

    }

    public function store_bullying(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_korban' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'nama_pelaku' => 'required',
            'waktu_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'perkara' => 'required',
            'saksi' => 'required',
            'kerugian' => 'required',
        ]);

        pelaporan_Bullying::create($validatedData);
        Alert::success('Laporan Berhasil Dikirim', 'Laporan akan dikirimkan ke pihak berwajib laporan balasan akan dikirim melalui email selambat-lambatnya 7x24 jam');
        return redirect('/Perundungan');

        dd($validatedData);

    }
}