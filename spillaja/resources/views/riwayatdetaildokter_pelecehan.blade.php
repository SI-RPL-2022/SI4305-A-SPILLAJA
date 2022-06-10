@extends('layouts.maindokter')
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
                        <p>ucup</p>
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <p>Medan, 10 desember 2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Agama</label>
                        <p>islam</p>
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <p>bandung</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <p>joni</p>
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal Kejadian</label>
                        <p>20/02/2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Judul Laporan</label>
                        <p>Dugaan pelecehan oleh oknum</p>
                    </div>
                    <div class="col">
                        <label for="">Alamat Kejadian</label>
                        <p>jalan raya</p>
                    </div>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection