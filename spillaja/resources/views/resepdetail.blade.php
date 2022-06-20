@extends('layouts.maindokter')
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
                        <p>ucup</p>
                    </div>
                    <div class="col">
                        <label for="email">Id Pasien</label>
                        <p>Ucupah</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Umur</label>
                        <p>19</p>
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal</label>
                        <p>20 Juni 2022</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Obat</label>
                        <p>-Panadol</p>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </form>

        </div>
    </div>

</section>

@endsection