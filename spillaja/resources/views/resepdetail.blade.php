@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Resep</h3>

            <form>
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Dokter</label>
                        <p>{{ $data[0]->nama_dokter }}</p>
                    </div>
                    <div class="col">
                        <label for="email">Nama Pasien</label>
                        <p>{{ $pasien[0]->nama_depan. ' ' .$pasien[0]->nama_belakang }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Umur</label>
                        <p>{{ $data[0]->umur }}</p>
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal</label>
                        <p>{{ $data[0]->tanggal }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Obat</label>
                        <p>{{ $data[0]->nama_obat }}</p>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </form>

        </div>
    </div>

</section>

@endsection