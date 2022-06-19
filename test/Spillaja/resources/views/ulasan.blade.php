@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="report" id="report">

    <div class="content">
        <h3>Laporan Sudah Terkirim </h3>
        <p>Mohon menunggu, laporan mu akan segera di proses, Kamu akan menerima email jika laporan telah disetujui lembaga terkait</p>
        <br>
        
        <a href="#formulir" class="btn">Isi Penilaian</a>
    </div>

</section>
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Penilaian <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Penilaian</h3>
            
        </div>
    </div>

</section>

@endsection