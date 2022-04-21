@extends('layouts.main')


@section('container')

<!-- welcome  -->

<section class="home" id="home">

    <div class="content">
        <h3>Selamat Datang <span>#sobatspill</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="pelecehan" class="btn">Buat Laporan</a>
        </div>

        <div class="box">
            <img src="/images/perundunganvector1.png" alt="">
            <h3>Perundungan</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="perundungan" class="btn">Buat Laporan</a>
        </div>

        <div class="box">
            <img src="/images/mentalvector1.png" alt="">
            <h3>Kesehatan Mental</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Buat Laporan</a>
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
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae nulla alias quos reiciendis eaque eos ducimus soluta voluptatibus? Natus nemo aspernatur suscipit similique doloribus provident officiis fuga accusantium molestias nihil!</p>
        </div>
    </div>

</section>

<!-- Tentang -->


<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Ulasan <span>#sobatspill</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="/images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
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

</section>

<!-- review section ends -->


@endsection