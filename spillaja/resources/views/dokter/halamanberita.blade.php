@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Artikel <span>#spillaja</span> </h1>

    <div class="container">

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    @foreach ($artikels as $index => $artikel)
                    <div class="filter-result">
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-md-left">{{ $artikel->judul_artikel }}</h5>
                                    <p>{{ $artikel->penulis }} | {{ date('d-M-Y', strtotime($artikel->tanggal))}}
                                    </p>
                                    <p>{{ Str::limit($artikel->isi_artikel, 200) }}</p>
                                    <form action="/Artikel-Detail-Dokter" method="get">
                                        <input type="hidden" value="{{ $artikel->id }}" name="id">
                                        <button type="submit" class="text-primary">Baca Selengkapnya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

</section>

@endsection