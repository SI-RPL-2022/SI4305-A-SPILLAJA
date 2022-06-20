@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Resep <span>#spillaja</span> </h1>

    <div class="container">

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    <div class="filter-result">
                        @foreach ($data as $index => $resep)
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex flex-wrap">
                                <div class="riwayat-content">
                                    <h5 class="text-center text-md-left">{{ $resep->nama_dokter }}</h5>
                                    <p>{{ $resep->tanggal }}</p>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <form action="/Resep-Detail" method="get">
                                    <input type="hidden" value='{{ $resep->id }}' name='id'>
                                    <button type='submit'
                                        class="btn d-block w-100 d-sm-inline-block btn-primary">Lihat</button>
                                </form>
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