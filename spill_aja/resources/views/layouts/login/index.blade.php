<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="https://drive.google.com/uc?export=view&id=16DGc7_Wrf_p9Bk-7Lp_cy0PSYZ9ufYYC" alt="">
                <div class="text">
                    <span class="text-1">Selamat Datang di <br></span>
                    <span class="text-2">Spill Aja</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="https://drive.google.com/uc?export=view&id=16DGc7_Wrf_p9Bk-7Lp_cy0PSYZ9ufYYC" alt="">
                <div class="text">
                    <span class="text-1">Selamat Datang di <br></span>
                    <span class="text-2">Spill Aja !!</span>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Masuk</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Masukkan Email" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Masukkan Kata Sandi" required>
                        </div>
                        <div class="text"><a href="#">Lupa Kata Sandi?</a></div>
                        <div class="button input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="submit" value="Masuk">
                        </div>
                        <div class="text signup-text">Belum punya akun? <label for="flip">Daftar Sekarang</label></div>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="title">Daftar Akun</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Masukkan Email" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Masukkan Kata Sandi" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Ulang Kata Sandi" required>
                        </div>
                        <div class="button input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="submit" value="Masuk">
                        </div>
                        <div class="text login-text">Sudah punya akun? <label for="flip">Masuk Sekarang</label></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>