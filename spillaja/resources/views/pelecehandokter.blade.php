@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Pelecehan Seksual</h3>
            <form>
                <input type="hidden" name="user_id">
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Korban</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Lengkap" name="nama_korban">
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <input type="text" id="" placeholder="Contoh : Kota, 01 Mei 2000" name="ttl">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Agama</label>
                        <input type="text" id="" placeholder="Tuliskan Agama" name="agama">
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <input type="text" id="" placeholder="Tuliskan Alamat Tinggal" name="alamat">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Pelaku" name="nama_pelaku">
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal Kejadian</label>
                        <input type="date" id="" name="tanggal_kejadian">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Judul Laporan</label>
                        <textarea id="" placeholder="contoh : dugaan pelecehan seksual kepada anak di bawah umur"
                            rows="5" name="judul_laporan"></textarea>
                    </div>
                    <div class="col">
                        <label for="">Alamat Kejadian</label>
                        <textarea id="" placeholder="Tuliskan Alamat Kejadian Perkara" rows="5"
                            name="alamat_kejadian"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn kirim-laporan">Kirim Laporan</button>

            </form>

        </div>
    </div>

</section>

@endsection