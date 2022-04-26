@extends('layouts.main')

@section('container')

{{-- <section class="report" id="report">

    <div class="content">
        <h3>Pengaduan <span>#pelecehanseksual</span></h3>
        <p>Hallo #sobatspill, silahkan isi data laporan dengan lengkap untuk melanjutkan ke proses selanjutnya, Terima Kasih</p>
        <a href="#formulir" class="btn">Isi Laporan</a>
    </div>

</section> --}}
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
    
                <h3>Pelecehan Seksual</h3>
                <form action=""  method="">
                {{-- <form action="{{ route('insert_pelecehan') }}"  method="POST">
                    {{ csrf_field() }} --}}
                    <div class="row">
                        <div class="column">
                            <label for="name">Nama</label>
                            <p>{{ $pelecehan->nama }}</p>
                        </div>
                        <div class="column">
                            <label for="email">Email</label>
                            <p>{{ $pelecehan->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="subject">Judul Laporan</label>
                            <p>{{ $pelecehan->judul }}</p>
                        </div>
                        <div class="column">
                            <label for="contact">Nomor HP</label>
                            <p>{{ $pelecehan->nomor }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="issue">Peristiwa</label>
                            <p>{{ $pelecehan->peristiwa }}</p>
                        </div>
                    </div>
                    
                </form>

        </div>
    </div>

</section>

@endsection