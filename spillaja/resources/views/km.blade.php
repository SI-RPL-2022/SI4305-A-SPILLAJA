@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Kesehatan Mental <span>#spillaja</span> </h1>

    @foreach ($data as $index => $psikiater )
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    <div class="filter-result">
                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    PS
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left">
                                        {{ $psikiater->nama_depan.' '.$psikiater->nama_belakang }}</h5>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="https://wa.me/{{ $psikiater->no_hp }}" target="_blank"
                                    class="btn d-block w-100 d-sm-inline-block btn-primary">Chat</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>

@endsection