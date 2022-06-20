@extends('layouts.maindokter')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Resep Dokter <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Resep Dokter</h3>
            <form action="/Resep-Dokter" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Dokter</label>
                        <input type="text" placeholder="Tuliskan Nama Lengkap Dokter" name="nama_dokter">
                    </div>
                    <div class="col">
                        <label for="email">Id Pasien</label>
                        <!-- <input type="text" id="" placeholder="Tuliskan Nama Lengkap Pasien" name="nama_pasien"> -->
                        <select class="form-select" id="table-right" name="id_pasien">
                            <option selected>Pilih Pasien</option>
                            @foreach ($user as $index => $id)
                            <option value="{{ $id->id }}">{{ $id->nama_depan.' '.$id->nama_belakang.' | '.$id->id }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Umur</label>
                        <input type="text" id="" placeholder="Tuliskan Umur Pasien" name="umur">
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal</label>
                        <input type="date" id="" name="tanggal">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Nama Obat</label>
                        <textarea id="" placeholder="Tuliskan Nama Obat" rows="5" name="nama_obat"></textarea>
                    </div>
                    <div class="col">
                    </div>
                </div>

                <button type="submit" class="btn kirim-laporan">Buat</button>

            </form>

        </div>
    </div>

</section>

@endsection