<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Support\Str;
use App\Models\Resep_Dokter;
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
    
    public function resep_dokter()
    {
        return view('dokter.resepdokter');
    }
    
    public function berita_dokter()
    {
        $artikels = DB::table('artikels')->get();
        return view('dokter.halamanberita', compact('artikels'));
    }
    
    public function artikel_dokter()
    {
        return view('dokter.buatartikel');
    }
    
    public function detailartikel_dokter(Request $request)
    {
        $id = $request->get('id');
        $data = Artikel::find($id);
        return view('dokter.detailartikel', compact('data'));
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

    public function store_resep(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dokter' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'tanggal' => 'required',
            'nama_obat' => 'required'
        ]);

        Resep_Dokter::create($validatedData);
        Alert::success('Resep Berhasil Dibuat', 'Silahkan cek kembali apakah resep yang ditulis sudah benar');
        return redirect('/Resep-Dokter');
    }

    public function store_artikel(Request $request)
    {
        $validatedData = $request->validate([
            'judul_artikel' => 'required',
            'tanggal' => 'required',
            'penulis' => 'required',
            'gambar' => 'image|file|required',
            'isi_artikel' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-artikel');
        }

        Artikel::create($validatedData);
        Alert::success('Artikel Berhasil Dibuat', 'Silahkan cek artikel yang sudah anda buat');
        return redirect('/Artikel-Dokter');
    }
}