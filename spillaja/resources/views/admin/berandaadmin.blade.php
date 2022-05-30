<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <img src="images/logo.png" style="width: 120px;"></a>

        <div class="icons">
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="/Logout" method="POST" class="login-form">
            @csrf
            <h3>Admin</h3>
            <div class="row toggle-riwayat-logout">
                <button style="text-decoration:none" type="submit">Logout</button>
            </div>
        </form>

    </header>

    <section class="formulir" id="formulir">

        <h1 class="heading"> Pendaftaran Akun Dokter <span>#spillaja</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3>Form Pendaftaran</h3>
                <form action="/Beranda-Admin" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="fronename">Nama Depan</label>
                            <input type="text" id="" placeholder="Tuliskan Nama Depan" name="nama_depan">
                        </div>
                        <div class="col">
                            <label for="backname">Nama Belakang</label>
                            <input type="text" id="" placeholder="Tuliskan Nama Depan" name="nama_belakang">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" id="" placeholder="Tuliskan Email" name="email">
                        </div>
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" id="" placeholder="Tuliskan Username" name="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nohp">No Telfon</label>
                            <input type="text" id="" placeholder="Tuliskan Telfon" name="no_hp">
                        </div>
                        <div class="col">
                            <label for="pass">Passwornd</label>
                            <input type="password" id="" placeholder="Tuliskan Password" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" id="" placeholder="Contoh : S1 Psikologi Universitas Indonesia"
                                name="pendidikan">
                        </div>
                        <div class="col">
                            <label for="pengalaman">Pengalaman Kerja</label>
                            <input type="text" id="" placeholder="Contoh : Psikolog RSU Pasar Minggu"
                                name="pengalaman_kerja">
                        </div>
                        <!-- </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="col">

                        </div>
                    </div> -->
                        <button type="submit" class="btn kirim-laporan">Register</button>

                </form>

            </div>
        </div>

    </section>

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
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> beranda </a>
                <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> pengaduan </a>
                <a href="#tentang" class="links"> <i class="fas fa-arrow-right"></i> tentang </a>
                <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> ulasan </a>
            </div>


        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <!-- sweet alert -->
    @include('sweetalert::alert')

</body>

</html>