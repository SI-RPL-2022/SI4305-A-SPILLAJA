<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        <img src="/images/logo.png" class="img-fluid" alt="">
                        <form class="login-form" action="/Login" method="POST">
                            @csrf
                            <h3>Masuk</h3>
                            <input type="email" name="email" placeholder="Masukkan Email" class="formbox @error('email')
                                is-invalid
                            @enderror">
                            @error('email')
                            {{ $message }}
                            @enderror
                            <input type="password" name="password" placeholder="Masukkan Kata Sandi" class="formbox @error('password')
                                is-invalid
                            @enderror">
                            @error('password')
                            {{ $message }}
                            @enderror
                            <p>Belum punya akun? <a href="/Register">Daftar Sekarang</a></p>
                            <button type="submit" class="btn">Masuk</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>