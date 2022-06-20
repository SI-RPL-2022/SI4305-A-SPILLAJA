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
                        @if (count($datas) != 0)
                        <div class="filter-riwayat text-center">
                            <div class="row">
                                <div class="col">
                                    <a href='/Riwayat-Pelecehann' class=" btn  btn-primary">Pelecehan</a>
                                </div>
                                <div class="col">
                                    <a href='/Riwayat-Perundungann' class=" btn btn-primary">Perundungan</a>
                                </div>
                            </div>
                        </div>
                        @foreach ($datas as $index => $data)
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-center text-md-left">{{ $data->perkara }}</h5>
                                    <p>{{ date('d-M-Y', strtotime($data->created_at)) }}</p>
                                    <p>#Perundungan</p>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <form action="/Riwayat-Detail-Perundungan" method="get">
                                    <input type="hidden" name="id_pelaporan" value="{{ $data->id }}">
                                    <button class="btn d-block w-100 d-sm-inline-block btn-primary">Lihat</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection