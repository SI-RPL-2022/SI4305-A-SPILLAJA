@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Artikel <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Buat Artikel</h3>
            <form>
                <div class="row">
                    <div class="column">
                        <label for="name">Judul Artikel</label>
                        <input type="text" id="name" placeholder="Tuliskan Judul Artikel">
                    </div>
                    <div class="column">
                        <label for="contact">Tanggal</label>
                        <input type="date" id="" name="tanggal_terbit">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Penulis</label>
                        <input type="text" id="subject" placeholder="Tuliskan Penulis">
                    </div>
                    <div class="column">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Isi Artikel</label>
                        <textarea id="issue" placeholder="Tuliskan isi artikel" rows="5"></textarea>
                    </div>
                </div>
            
                <a href="ulasan" class="btn">Buat</a>
                
            </form>
            
        </div>
    </div>

</section>

@endsection