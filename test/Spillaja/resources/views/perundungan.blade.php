@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Perundungan</h3>
            <form action="/Perundungan" method="POST">
                @csrf
                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
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
                        <label for="subject">Jenis Kelamin</label>
                        <input type="text" id="" placeholder="Perempuan / Laki-laki" name="jenis_kelamin">
                    </div>
                    <div class="col">
                        <label for="contact">Agama</label>
                        <input type="text" id="" placeholder="Tuliskan Agama" name="agama">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Pekerjaan</label>
                        <input type="text" id="" placeholder="Tuliskan Pekerjaan" name="pekerjaan">
                    </div>
                    <div class="col">
                        <label for="subject">Alamat</label>
                        <input type="text" id="" placeholder="Tuliskan Alamat Lengkap" name="alamat">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="contact">Waktu Kejadian</label>
                        <input type="date" id="" name="waktu_kejadian">
                    </div>
                    <div class="col">
                        <label for="subject">Tempat Kejadian</label>
                        <input type="text" id="" placeholder="Tuliskan Tempat Kejadian Perkara" name="tempat_kejadian">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Perkara</label>
                        <textarea id="" placeholder="Tuliskan Perkara" rows="5" name="perkara"></textarea>
                    </div>
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Pelaku" name="nama_pelaku">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Saksi</label>
                        <textarea id="" placeholder="Tuliskan Nama Saksi" rows="5" name="saksi"></textarea>
                    </div>
                    <div class="col">
                        <label for="">Kerugian</label>
                        <textarea id="" placeholder="Tuliskan Kerugian" rows="5" name="kerugian"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn kirim-laporan">Kirim Laporan</button>

            </form>

        </div>
    </div>

</section>

@endsection