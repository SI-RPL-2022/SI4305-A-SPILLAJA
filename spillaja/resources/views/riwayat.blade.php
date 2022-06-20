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
                        @if (count($data1) != 0)
                        <div class="filter-riwayat text-center">
                            <div class="row">
                                <div class="col">
                                    <a href='/Riwayat-Pelecehan' class=" btn  btn-primary">Pelecehan</a>
                                </div>
                                <div class="col">
                                    <a href='/Riwayat-Perundungan' class=" btn btn-primary">Perundungan</a>
                                </div>
                            </div>
                        </div>
                        @foreach ($data1 as $index => $data_1)
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-center text-md-left">{{ $data_1->judul_laporan }}</h5>
                                    <p>{{ date('d-M-Y', strtotime($data_1->created_at)) }}</p>
                                    <p>#Pelecehan</p>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <form action="/Riwayat-Detail-Pelecehan" method="get">
                                    <input type="hidden" name="id_pelaporan" value="{{ $data_1->id }}"">
                                    <button class=" btn d-block w-100 d-sm-inline-block btn-primary">Lihat</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        @if (count($data2) != 0)
                        @foreach ($data2 as $index => $data_2)
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-center text-md-left">{{ $data_2->perkara }}</h5>
                                    <p>{{ date('d-M-Y', strtotime($data_2->created_at)) }}</p>
                                    <p>#Perundungan</p>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <form action="/Riwayat-Detail-Perundungan" method="get">
                                    <input type="hidden" name="id_pelaporan" value="{{ $data_2->id }}">
                                    <button class="btn d-block w-100 d-sm-inline-block btn-primary">Lihat</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        @if (count($data1) === 0 and count($data2) === 0)
                        <h2 class="text-center">Anda belum membuat laporan</h2>
                        @endif
                        <!-- <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-center text-md-left">Front End Developer</h5>
                                    <p>1 Januari 2022</p>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="/Riwayat-Detail"
                                    class="btn d-block w-100 d-sm-inline-block btn-primary">Lihat</a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection