@extends('layouts.main')


@section('container')

<div class="col-md-7 feeds">
    <div class="d-flex justify-content-between border-bottom">
        <strong class="title" style="font-size: 55pt;">Beranda</strong>
    </div>

    <div class="posting py-2 px-2 border-bottom">
        <div class="d-flex w-100">
            <div class="image" style="margin-right: 20px;">
                <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="https://drive.google.com/uc?export=view&id=1QqyWrgWB9zcNprrV9oCNRe_NKPOzKzIl" alt="">
            </div>
    
            <div class="pl-2 w-100">
                <input type="text" class="form-control border-0" placeholder="Apa yang sedang terjadi?">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="icons" style="color: #1DA1F2; font-size: 16pt;">
                        <i class="fas fa-image"></i>
                        <i class="fas fa-smile-beam"></i>
                    </div>
                </div>    
             </div>
        </div>
    </div>

    <div class="feed-items py-3 px-3 border-bottom">
        <div class="d-flex w-100">
            <div class="image">
                <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="https://akcdn.detik.net.id/community/media/visual/2022/03/09/robert-lewandowski_169.jpeg?w=700&q=90" alt="">
            </div>

            <div class="content" style="margin-left: 15px;">
                <strong>Ridwan Lewandowski</strong> <span> &bullet; 7min</span>
                <div class="caption mt-1">
                    Selamat pagi dunia yang indah, aku berharap keberuntungan berpihak kepada ku hari ini :)
                </div>

                <div class="mt-3 d-flex justify-content-between icon-share" style="color: #1DA1F2; font-size: 14pt;">
                    <div><i class="fas fa-comment-dots"></i></div>
                    <div><i class="fas fa-heart"></i></div>
                    <div><i class="fas fa-share"></i></div>
                </div>
            </div>
        </div>
    </div>                

    <div class="feed-items py-3 px-3 border-bottom">
        <div class="d-flex w-100">
            <div class="image">
                <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="https://d1bpj0tv6vfxyp.cloudfront.net/sering-dianggap-sama-ini-bedanya-psikolog-dan-psikiaterhalodoc.jpg" alt="">
            </div>

            <div class="content" style="margin-left: 15px;">
                <strong>Andhini Putri <i class="fas fa-check-circle" style="color: #1DA1F2;"></i></strong> <span> &bullet; 10min</span>
                <div class="caption mt-1">
                    Selamat Pagi teman-teman, apapun yang akan kamu lewati hari ini semangat selalu yaaa, oiyaa aku punya rekomendasi video buat kamu yang suka moodyan nih !!
                </div>

                <div class="image mt-2">
                    <iframe style="border-radius:20px;" width="100%" height="400" src="https://www.youtube.com/embed/Ye7IsF1cn6A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="mt-2 d-flex justify-content-between icon-share" style="color: #1DA1F2; font-size: 14pt;">
                    <div><i class="fas fa-comment-dots"></i></div>
                    <div><i class="fas fa-heart"></i></div>
                    <div><i class="fas fa-share"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="feed-items py-3 px-3 border-bottom">
        <div class="d-flex w-100">
            <div class="image">
                <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="https://sabilia.id/wp-content/uploads/2022/03/bocah-tiktok-viral-mengacungkan-jari-tengah-1.jpg" alt="">
            </div>

            <div class="content" style="margin-left: 15px;">
                <strong>Doni Salmisil </strong> <span> &bullet; 11min</span>
                <div class="caption mt-1">
                    Susah yaa kalo udah berada di dalam circle yang gak se frekuensi sama kita :(
                </div>

                <div class="mt-2 d-flex justify-content-between icon-share" style="color: #1DA1F2; font-size: 14pt;">
                    <div><i class="fas fa-comment-dots"></i></div>
                    <div><i class="fas fa-heart"></i></div>
                    <div><i class="fas fa-share"></i></div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection