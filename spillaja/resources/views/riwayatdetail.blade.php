@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Pelecehan Seksual</h3>
            <form>
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Korban</label>
                        <p>Asep Kurniawan</p>
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <p>Medan, 21 Desember 2005</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Agama</label>
                        <p>Islam</p>
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <p>Jalan Karya Ujung Eka Selamat Nomor 5</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <p>Mega Surito</p>
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal Kejadian</label>
                        <p>7 Desember 2022</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Judul Laporan</label>
                        <p>Dugaan Pelecehan seksual dibawah umur oleh oknum guru di SDN 001</p>
                    </div>
                    <div class="col">
                        <label for="">Alamat Kejadian</label>
                        <p>SDN 001 jalan utama no 02</p>
                    </div>
                </div> 
                
            </form>
            
        </div>
    </div>

</section>

@endsection