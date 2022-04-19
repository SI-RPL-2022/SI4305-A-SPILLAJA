@extends('layouts.main')
<link rel="stylesheet" href="css/main_style.css">

@section('container')

<div class="col-md-7 feeds">
    <div class="d-flex justify-content-between">
        <strong class="title" style="font-size: 55pt;">Riwayat Laporan</strong>
    </div>

    <div class="posting py-3 px-3 border-bottom">
    </div>

    <div class="feed-items py-3 px-3 border-bottom">
        <div class="d-flex w-100">
            <div class="content-kiri" style="margin-left: 15px;">
                <strong>Pelecehan Seksual</strong>
                <div class="rsu">
                    <small>03/04/2022</small>
                </div>
            </div>
            <div class="konsul" style="padding-top: 10px;padding-left: 700px;">
                <button class="btn button-lihat btn-primary">Lihat</button>
            </div>
        </div>
    </div>
    <div class="feed-items py-3 px-3 border-bottom">
        <div class="d-flex w-100">
            <div class="content-kiri" style="margin-left: 15px;">
                <strong>Intimidasi</strong>
                <div class="rsu">
                    <small>29/12/2021</small>
                </div>
            </div>
            <div class="konsul" style="padding-top: 10px; padding-left: 762px;">
                <button class="btn btn-primary button-lihat">Lihat</button>
            </div>
        </div>
    </div>
</div>

@endsection