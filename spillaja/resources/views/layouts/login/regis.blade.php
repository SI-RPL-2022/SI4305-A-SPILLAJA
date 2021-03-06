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
    <title>Daftar</title>
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
                        <form class="login-form" action="/Register" method="POST">
                            @csrf
                            <h3>Daftar</h3>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="text" name="nama_depan" placeholder="Nama Depan"
                                        class="formbox @error('nama_depan') is-invalid @enderror"
                                        value="{{ old('nama_depan') }}">
                                    @error('nama_depan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="text" name="nama_belakang" placeholder="Nama Belakang" class="formbox @error('nama_belakang')
                                        is-invalid
                                    @enderror" value="{{ old('nama_belakang') }}">
                                    @error('nama_belakang')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="email" name="email" placeholder="Email" class="formbox @error('email')
                                        is-invalid
                                    @enderror" value="{{ old('email') }}">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="text" name="username" placeholder="Username" class="formbox @error('username')
                                        is-invalid
                                    @enderror" value="{{ old('username') }}">
                                    @error('username')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="password" name="password" placeholder="Password" class="formbox @error('password')
                                        is-invalid
                                    @enderror">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="password" name="password_confirmation"
                                        placeholder="Verifikasi Password" class="formbox @error('passwordconfirmation')
                                            is-invalid
                                        @enderror">
                                    @error('password_confirmation')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col-6">
                                    <input type="number" name="no_hp" placeholder="Nomor Handphone" class="formbox @error('no_hp')
                                        is-invalid
                                    @enderror" value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row punya-akun">
                                <button type="submit" class="btn">Daftar</button>
                            </div>
                            <div class="row punya-akun">
                                <p>Sudah punya akun? <a href="/Login">Masuk Sekarang</a></p>
                            </div>
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
                        <div class="title">Daftar Akun</div>
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
                        <div class="form-row pt-3">
                            <div class="col-lg-7">
                                <input type="password" class="form-control" placeholder="Masukkan Ulang Kata Sandi" required>
                            </div>
                        </div>
                        <div class="form-row pt-4">
                            <div class="col-lg-7">
                                <input class="button" type="submit" value="Masuk">
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-lg-7">
                                <div class="text signup-text">Sudah punya akun? <a href="login"><label>Masuk Sekarang</label></a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
</body>

</html>