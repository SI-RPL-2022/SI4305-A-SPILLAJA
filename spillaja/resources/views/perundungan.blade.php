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
            <form>
                <div class="row">
                    <div class="column">
                        <label for="name">Nama</label>
                        <input type="text" id="name" placeholder="Tuliskan Nama Lengkap">
                    </div>
                    <div class="column">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Tuliskan Email Anda">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Judul Laporan</label>
                        <input type="text" id="subject" placeholder="Contoh : Laporan Pelecehan Seksual">
                    </div>
                    <div class="column">
                        <label for="contact">Nomor HP</label>
                        <input type="tel" id="contact" placeholder="Tuliskan Nomor Aktif">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Peristiwa</label>
                        <textarea id="issue" placeholder="Tuliskan gambaran peristiwa secara lengkap dan jelas !" rows="5"></textarea>
                    </div>
                </div>
            
                <a href="ulasan" class="btn">Kirim Laporan</a>
                
            </form>
            
        </div>
    </div>

</section>

@endsection