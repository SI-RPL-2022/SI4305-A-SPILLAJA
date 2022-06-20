@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Riwayat Laporan <span>#spillaja</span> </h1>

    <div class="container">

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    <div class="filter-result">
                        @foreach ($datas as $index => $data)
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-md-left">{{ $data->judul_artikel }}</h5>
                                    <p>{{ $data->penulis. ' | '. $data->tanggal }}</p>
                                    <p>{{ Str::limit($data->isi_artikel, 200) }}</p>
                                    <form action="/Artikel-Detail-Pasien" method="get">
                                        <input type="hidden" value="{{ $data->id }}" name="id">
                                        <button type="submit" class="text-primary">Baca Selengkapnya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection