@extends('layouts.maindokter')


@section('container')

<!-- welcome  -->

<section class="home" id="home">

    <div class="content">
        <h3>Selamat Datang <span>#sobatspill</span></h3>
        <p>Aplikasi website pelaporan pelecehan seksual, bullying dan juga konsultasi kesehatan mental</p>
        <a href="#features" class="btn">Lapor Sekarang</a>
    </div>

</section>

<!-- welcome -->


<!-- pelaporan -->

<section class="features" id="features">

    <h1 class="heading"> Pengaudan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="/images/shvector1.png" alt="">
            <h3>Pelecehan Seksual</h3>
            <p>Form pelaporan pelecehan seksual, laporkan peluku pelecehan seksual!</p>
            <a href="/Pelecehan-Dokter" class="btn">Buat Laporan</a>
        </div>

        <div class="box">
            <img src="/images/perundunganvector1.png" alt="">
            <h3>Perundungan</h3>
            <p>Form pelaporan bullying, laporkan perlakuan bullying yang anda alami</p>
            <a href="/Perundungan-Dokter" class="btn">Buat Laporan</a>
        </div>

        <div class="box">
            <img src="/images/mentalvector1.png" alt="">
            <h3>Buat Artikel</h3>
            <p>Membuat artikel untuk informasi kepada pasiean agar dapat mencegah</p>
            <a href="/Artikel-Dokter" class="btn">Buat Artikel</a>
        </div>

    </div>

</section>

<!-- pelaporan -->


<!-- Tentang -->

<section class="tentang" id="tentang">

    <h1 class="heading"> Tentang <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="/images/logo.png" alt="">
            <h3>Tentang Kami</h3>
            <p>spillaja merupakan sebuah aplikasi berbasis web pelaporan pelecehan seksual, bullying dan juga konsultasi kesehatan mental. 
                spillaja dapat menjadi solusi bagi anda yang takut atau bingung jika mengalami hal pelecehan seksual, bullying dan ganguuan mental. 
                spillaja berperan sebagai penghubung antara anda dengan pihak berwajib yang menangangi hal-hal tersebut.</p>
        </div>
    </div>

</section>

<!-- Tentang -->


<!-- review section starts  -->

{{-- <section class="review" id="review">

    <h1 class="heading"> Ulasan <span>#sobatspill</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="/images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime
                    ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime
                    ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime
                    ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/images/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime
                    ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section> --}}

<!-- review section ends -->


@endsection