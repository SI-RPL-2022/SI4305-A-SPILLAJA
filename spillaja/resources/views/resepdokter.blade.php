@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Resep Dokter <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Resep Dokter</h3>
            <form>
                <input type="hidden" name="user_id">
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Dokter</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Lengkap Dokter" name="nama_dokter">
                    </div>
                    <div class="col">
                        <label for="email">Nama Pasien</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Lengkap Pasien" name="ttl">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Umur</label>
                        <input type="text" id="" placeholder="Tuliskan Umur Pasien" name="jenis_kelamin">
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal</label>
                        <input type="date" id="" name="tanggal_kejadian">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Nama Obat</label>
                        <textarea id="" placeholder="Tuliskan Nama Obat" rows="5" name="perkara"></textarea>
                    </div>
                    <div class="col">
                    </div>
                </div>

                <button type="submit" class="btn kirim-laporan">Buat</button>

            </form>

        </div>
    </div>

</section>

@endsection