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
                        <p>{{ $data->nama_korban }}</p>
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <p>{{ $data->ttl }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Agama</label>
                        <p>{{ $data->agama }}</p>
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <p>{{ $data->alamat }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <p>{{ $data->nama_pelaku }}</p>
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal Kejadian</label>
                        <p>{{ date('d-M-Y', strtotime($data->tanggal_kejadian)) }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Judul Laporan</label>
                        <p>{{ $data->judul_laporan }}</p>
                    </div>
                    <div class="col">
                        <label for="">Alamat Kejadian</label>
                        <p>{{ $data->alamat_kejadian }}</p>
                    </div>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection