@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading">Artikel <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Cara Pintar Menjaga Imun Tubuh</h3>
            <form>
                <div class="col">
                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="" width="500px" class="center">
                </div>
                <div class="col mt-4">
                    <p>Penulis : {{ $data->penulis }}</p>
                </div>
                <div class="col mt-4">
                    <p>{{ $data->isi_artikel }}</p>
                </div>

            </form>

        </div>
    </div>

</section>

@endsection