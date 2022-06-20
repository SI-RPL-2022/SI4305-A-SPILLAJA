<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelaporan_Bullying;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\pelaporan_pelecehanSeksual;

class dokter_controller extends Controller
{
    public function index()
    {
        return view('dokter.berandadokter');
    }

    public function pelecehan_dokter()
    {
        return view('dokter.pelecehandokter');
    }
    
    public function perundungan_dokter()
    {
        return view('dokter.perundungandokter');
    }
    
    public function riwayat_dokter()
    {
        $user = Auth::user();
        $id = $user->id;
        $data1 = DB::table('pelaporan_pelecehan_seksuals')->where('user_id', '=', $id)->get();
        $data2 = DB::table('pelaporan__bullyings')->where('user_id', '=', $id)->get();

        return view('dokter.riwayatdokter', compact('data1', 'data2'));
    }

    public function riwayatDetailDokter_perundungan(Request $request)
    {
        $id = $request->get('id_pelaporan');
        $data = pelaporan_Bullying::find($id);

        return view('dokter.riwayatdetaildokter_perundungan', compact('data'));
    }

    public function riwayatDetailDokter_pelecehan(Request $request)
    {
        $id = $request->get('id_pelaporan');
        $data = pelaporan_pelecehanSeksual::find($id);

        return view('dokter.riwayatdetaildokter_pelecehan', compact('data'));
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
        return redirect('/Pelecehan-Dokter');

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
        return redirect('/Perundungan-Dokter');

        // dd($validatedData);

    }
}