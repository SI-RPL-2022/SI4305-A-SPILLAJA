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
                        <p>agul</p>
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <p>Jakarta, 20 September 2011</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Jenis Kelamin</label>
                        <p>Laki-laki</p>
                    </div>
                    <div class="col">
                        <label for="contact">Agama</label>
                        <p>Kristen</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Pekerjaan</label>
                        <p>Buruh</p>
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <p>Pasar Senen</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Waktu Kejadian</label>
                        <p>06/05/2022</p>
                    </div>
                    <div class="col">
                        <label for="">Tempat Kejadian</label>
                        <p>kampus</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Perkara</label>
                        <p>Pemukulan oleh teman</p>
                    </div>
                    <div class="col">
                        <label for="">Nama Pelaku</label>
                        <p>yanto</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Saksi</label>
                        <p>lili</p>
                    </div>
                    <div class="col">
                        <label for="">Kerugian</label>
                        <p>Hnadphone</p>
                    </div>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection