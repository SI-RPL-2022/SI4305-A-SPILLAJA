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

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Perundungan</h3>
            <form action="{{ route('insert_perundungan') }}"  method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="column">
                        <label for="name">Nama</label>
                        <input type="text" name="nama" id="name" placeholder="Tuliskan Nama Lengkap">
                    </div>
                    <div class="column">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Tuliskan Email Anda">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Judul Laporan</label>
                        <input type="text" name="judul"id="subject" placeholder="Contoh : Laporan Pelecehan Seksual">
                    </div>
                    <div class="column">
                        <label for="contact">Nomor HP</label>
                        <input type="number" name="nomor" id="contact" placeholder="Tuliskan Nomor Aktif" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Peristiwa</label>
                        <textarea id="issue" name="peristiwa" placeholder="Tuliskan gambaran peristiwa secara lengkap dan jelas !" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn">Kirim Laporan</button>
                
            </form>
            
        </div>
    </div>

</section>

@endsection