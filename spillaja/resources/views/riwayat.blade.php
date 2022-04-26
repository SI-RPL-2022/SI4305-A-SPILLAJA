@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="report" id="report">

    <div class="content">
        <h3>Pengaduan <span>#perundungan</span></h3>
        <p>Hallo #sobatspill, silahkan isi data laporan dengan lengkap untuk melanjutkan ke proses selanjutnya, Terima Kasih</p>
        <a href="#formulir" class="btn">Isi Laporan</a>
    </div>

</section>
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Riwayat Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
        @foreach ($pelecehan as $row)
                
           
            <div class="row riwayat">
                <div class="col info-judul">
                    <h2 class="judul-riwayat" >{{ $row->judul }}</h2>
                    <p>{{ $row->created_at }}</p>
                </div>
                <div class="col tombol-lihat">
                    <a href="{{ route('driwayat',['id' => $row->id ])}}"> <button type="button" class="btn btn-primary">Lihat </button></a>
                </div>
            </div>
        @endforeach
          
        </div>
    </div>

</section>

@endsection