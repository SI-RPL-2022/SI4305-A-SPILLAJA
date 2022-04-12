@extends('layouts.main')
<link rel="stylesheet" href="css/lapor_style.css">

@section('container')

<body>
    <div class="col-md-7 feeds">
        <div class="d-flex justify-content-between border-bottom">
            <strong class="title" style="font-size: 40pt;">Pelecehan Seksual</strong>
        </div>
    
        <div class="hero">
            <form action="" class="mt-5">
                <div class="input-group">
                    <input type="text" id="" placeholder="Judul Laporan">
                </div>
                <div class="row">
                    <div class="input-group">
                        <input type="text" id="" placeholder="Provinsi">
                    </div>
                    <div class="input-group">
                        <input type="text" id="" placeholder="Kabupaten / Kota">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <input type="text" id="" placeholder="Kecamatan">
                    </div>
                    <div class="input-group">
                        <input type="text" id="" placeholder="Kelurahan">
                    </div>
                </div>
                <div class="input-group">
                    <textarea id="" rows="3" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="input-group">
                    <textarea id="" rows="6" placeholder="Tuliskan Peristiwa dengan Lengkap dan Jelas"></textarea>
                </div>
                <div class="input-group">
                    <input type="checkbox">
                 </div>
                <div class="form-row pt-4">
                    <div class="col-lg-7">
                        <input class="button" type="submit" value="Kirim">
                    </div>
                </div>
             </form>
        </div>
             
    </div>
</body>

    

@endsection