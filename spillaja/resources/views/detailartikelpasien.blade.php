@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading">Artikel <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>{{ $datas[0]->judul_artikel }}</h3>
            <form>
                <div class="col">
                    <img src="{{ asset('storage/' . $datas[0]->gambar) }}" alt="" width="500px" class="center">
                </div>
                <div class="col mt-4">
                    <p>Penulis : {{ $datas[0]->penulis }}</p>
                </div>
                <div class="col mt-4">
                    <p>{{ $datas[0]->isi_artikel }}</p>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection