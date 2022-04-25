<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <section class="welcome" id="welcome">

        <div class="box-container">
    
            <div class="box">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img src="/images/welcomevector.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <form action="{{ route('authLogin') }}" class="login-form" method="POST">
                            @csrf
                            <h3>Masuk</h3>
                            <input type="email" name="email" placeholder="Masukkan Email" class="formbox" required>
                            <input type="password" name="password" placeholder="Masukkan Kata Sandi" class="formbox" required>
                            <p>Belum punya akun? <a href="regis">Daftar Sekarang</a></p>
                            <button type="submit" class="btn">Masuk</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    {{-- <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="/images/image_login.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <form action="#">
                        <div class="title">Masuk</div>
                        <div class="form-row pt-4">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" placeholder="Masukkan Email" required>
                            </div>
                        </div>
                        <div class="form-row pt-3">
                            <div class="col-lg-7">
                                <input type="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-lg-7">
                                <div class="text"><a href="#">Lupa Kata Sandi?</a></div>
                            </div>
                        </div>
                        <div class="form-row pt-4">
                            <div class="col-lg-7">
                                <input class="button" type="submit" value="Masuk">
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-lg-7">
                                <div class="text signup-text">Belum punya akun? <a href="regis"><label>Daftar Sekarang</label></a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
</body>
</html>