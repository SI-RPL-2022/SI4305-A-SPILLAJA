@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

<section class="bill" id="bill">

    <div class="content">
        <h3>Struk Pembayaran Konsultasi</h3>
        <p>Nama Dokter  : <b>Dr. Amanda Proscilla</b></p>
        <hr>
        <p>Total Harga  : <b>Rp 50.000</b></p>
        <a href="#formulir" class="btn">Bayar</a>
    </div>

</section>
    
<section class="formulir" id="formulir">

    <div class="box-container">

        <div class="box">
            <h3>Pembayaran</h3>
            <form>
                <div class="row">
                    <div class="bank" style="overflow-x:auto;">
                        <label>Pilih Metode Pembayaran</label>
                        <table border=0 cellpadding="10">
                          <tr>
                            <th><input type="checkbox"  value=""><img src="images/bni.png" width="60px" height="20px"></th>
                            <th><input type="checkbox"  value=""><img src="images/logo-bca.png" width="60px" height="20px"></th>
                            <th><input type="checkbox"  value=""><img src="images/bri.png" width="60px" height="25px"></th>
                            <th><input type="checkbox"  value=""><img src="images/bjb.png" width="60px" height="30px"></th>
                            <th><input type="checkbox"  value=""><img src="images/bankdki.png" width="60px" height="25px"></th>
                            <th><input type="checkbox"  value=""><img src="images/bankbb.png" width="60px" height="20px"></th>
                          </tr>
                          <tr>
                            <th><input type="checkbox"  value=""><img src="images/visa.png" width="60px" height="30px"></th>
                            <th><input type="checkbox"  value=""><img src="images/masterc.png" width="60px" height="30px"></th>
                            <th><input type="checkbox"  value=""><img src="images/paypal.png" width="60px" height="20px"></th>
                            <th><input type="checkbox"  value=""><img src="images/alfa.jpg" width="70px" height="50px"></th>
                            <th><input type="checkbox"  value=""><img src="images/indomaret.png" width="60px" height="20px"></th>
                            <th><input type="checkbox"  value=""><img src="images/gopay.jpg" width="65px" height="40px"></th>
                          </tr>
                        </table>
                      </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Total Pembayaran</label>
                        <input type="text" id="subject" placeholder="Rp 150.000" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Catatan</label>
                        <input type="text" id="subject" placeholder="" >
                    </div>
                </div>
                <a href="#" class="btn">Bayar</a>
                <a href="#" class="btn">Batal</a>
        
            </form>
            
        </div>
    </div>

</section>

@endsection