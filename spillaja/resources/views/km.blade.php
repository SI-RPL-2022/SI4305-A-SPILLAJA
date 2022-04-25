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

    <h1 class="heading"> Kesehatan Mental <span>#spillaja</span> </h1>

    <div class="container">
        <div class="row km">
            <div class="col fotokm">
                <p>FOTO</p>
            </div>
            <div class="col namakm">
                <p id="namadok">Muhammad Hafizh</p>
                <p id="gelardok">gelar</p>
                <p id="reviewdok">tingkat kepuasan customer / bintang</p>
            </div>
            <div class="col hargakm">
                <p>Harga</p>
            </div>
            <div class="col pesankm">
                <button type="button" class="btn btn-primary">Lihat</button>
            </div>
        </div>
    </div>

</section>

@endsection