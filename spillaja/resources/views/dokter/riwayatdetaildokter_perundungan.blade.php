@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Perundungan</h3>
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
                        <label for="subject">Jenis Kelamin</label>
                        <p>{{ $data->jenis_kelamin }}</p>
                    </div>
                    <div class="col">
                        <label for="contact">Agama</label>
                        <p>{{ $data->agama }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Pekerjaan</label>
                        <p>{{ $data->pekerjaan }}</p>
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <p>{{ $data->alamat }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Waktu Kejadian</label>
                        <p>{{ date('d-M-Y', strtotime($data->waktu_kejadian)) }}</p>
                    </div>
                    <div class="col">
                        <label for="">Tempat Kejadian</label>
                        <p>{{ $data->tempat_kejadian }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Perkara</label>
                        <p>{{ $data->perkara }}</p>
                    </div>
                    <div class="col">
                        <label for="">Nama Pelaku</label>
                        <p>{{ $data->nama_pelaku }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Saksi</label>
                        <p>{{ $data->saksi }}</p>
                    </div>
                    <div class="col">
                        <label for="">Kerugian</label>
                        <p>{{ $data->kerugian }}</p>
                    </div>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection