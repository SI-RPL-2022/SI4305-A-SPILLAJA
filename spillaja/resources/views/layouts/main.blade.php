<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spil Aja</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <img src="images/logo.png" style="width: 120px;"></a>

        <nav class="navbar">
            <a style="text-decoration:none" href="/Beranda">Beranda</a>
            <a style="text-decoration:none" href="/Beranda#features">Pengaduan</a>
            <a style="text-decoration:none" href="/Beranda#tentang">Tentang</a>
            <a style="text-decoration:none" href="/Beranda#review">Ulasan</a>
        </nav>

        <div class="icons">
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <!-- <form action="" class="login-form"> -->
        <h3>{{ auth()->user()->username }}</h3>
        <div class="row toggle-riwayat-logout">
            <a style="text-decoration:none" href="/Riwayat">Riwayat</a>
        </div>
        <div class="row toggle-riwayat-logout">
            <form action="/Logout" method="POST">
                @csrf
                <button type="submit">Keluar</button>
            </form>
        </div>
        {{-- <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn"> --}}
        <!-- </form> -->

    </header>

    <!-- header section ends -->


    <!-- content section ends -->
    @yield('container')

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="#" class="logo"> <img src="images/logo.png" style="width: 120px;"></a>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +62 8332140384 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +62 8221947204 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> spillaja@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="/Beranda" class="links"> <i class="fas fa-arrow-right"></i> beranda </a>
                <a href="/Beranda#features" class="links"> <i class="fas fa-arrow-right"></i> pengaduan </a>
                <a href="/Beranda#tentang" class="links"> <i class="fas fa-arrow-right"></i> tentang </a>
                <a href="/Beranda#review" class="links"> <i class="fas fa-arrow-right"></i> ulasan </a>
            </div>


        </div>

    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- sweet alert -->
    @include('sweetalert::alert')

</body>

</html>