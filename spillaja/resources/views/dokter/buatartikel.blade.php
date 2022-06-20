@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')


<section class="formulir" id="formulir">

    <h1 class="heading-buatartikel"> Formulir Artikel <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Buat Artikel</h3>
            <form action="/Artikel-Dokter" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="column">
                        <label for="name">Judul Artikel</label>
                        <input type="text" id="name" placeholder="Tuliskan Judul Artikel" name="judul_artikel">
                    </div>
                    <div class="column">
                        <label for="contact">Tanggal</label>
                        <input type="date" id="" name="tanggal">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Penulis</label>
                        <input type="text" id="subject" placeholder="Tuliskan Penulis" name="penulis">
                    </div>
                    <div class="column">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Isi Artikel</label>
                        <textarea id="issue" placeholder="Tuliskan isi artikel" rows="5" name="isi_artikel"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn">Buat</button>

            </form>

        </div>
    </div>

</section>

@endsection