<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Spill Aja</title>

    <link rel="stylesheet" href="css/main_style.css">
  </head>
  <body>

    <main>
        <!-- <div class="container"> -->
            <div class="row g-0">

                <!-- bagian kiri -->
                <div class="col-md-2">
                    <img class="logo" src="images/logo.png" style="width: 180px;" alt="">

                    <div class="menu menu-kiri">
                        <ul class="list-group">
                            <li style="font-weight: bold;" class="list-group-item">
                                <a href="#">Beranda</a>
                            </li>
                            <li class="list-group-item">
                                <a href="pelecehan">Pelecehan Seksual</a>
                            </li>
                            <li class="list-group-item">
                                <a href="km">Kesehatan Mental</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Perundungan</a>
                            </li>
                            <li class="list-group-item">
                                <a href="riwayat">Riwayat</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- bagian tengah -->
               @yield('container')
               



                <!-- bagian kanan     -->
                <div class="col-md-3 px-3">
                    <div class="menu-kanan">
                        <button class="btn btn-light icon" style="border-radius: 10px; height: 60px; width: 60px;" ><img src="images/Massage.png" alt=""></button>
                        <button class="btn btn-light icon" style="border-radius: 10px; height: 60px; width: 60px;"><img src="images/Profile.png" alt=""></button>
                        <button class="btn btn-light icon" style="border-radius: 10px; height: 60px; width: 60px;"><img src="images/Exit.png" alt=""></button>
                    </div>

                    <div class="search-bar" style="padding-top: 35px;">
                        <input type="text" placeholder="Cari" style="background-color: #f3f3f3; border-radius: 30px;" class="border-0 py-3 form-control">
                    </div>

                    <div class="trends mt-3 px-3 py-3" style="background-color: #f3f3f3; border-radius: 30px;">
                        <div class="header d-flex justify-content-between">
                            <strong style="padding-bottom: 10px;">Tips</strong>
                        </div>
                        <div class="trend">
                            <div class="d-flex justify-content-between text-muted">
                                <small>Mental</small>
                            </div>
                            <strong>7 Cara Mengatasi Insecure</strong>
                            <p></p>
                        </div>
                        <div class="trend">
                            <div class="d-flex justify-content-between text-muted">
                                <small>Perundungan</small>
                            </div>
                            <strong>Bullying dan Ancaman Hukumnya</strong>
                            <p></p>
                        </div>
                        <div class="trend">
                            <div class="d-flex justify-content-between text-muted">
                                <small>Pelecehan Seksual</small>
                            </div>
                            <strong>5 Tips Terhindar dari Pelecehan Seksual</strong>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </main>    





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>