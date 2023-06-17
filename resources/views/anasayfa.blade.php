@extends('layouts.app')
@section('title')
    Anasayfa
@endsection
@section('css_js')
    <link href="/css/anasayfa.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@endsection
@section('content')
    <style>
        .footer{

            border-width: 1px;
            border-color: rgb(0, 0, 0);
            border-style: solid;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(/images/footer_resmi.png);
            box-sizing: border-box;
            position: absolute;
            left: 0px;
            width: 100%;
            height: 391px;
            z-index: 31;
        }
        .card{
            padding: 0;

        }
        .card-wrapper{

        }
        .footer{
            font-size: 20px !important;
        }
        .header2{

        }
        .kullanici_siralama {
            display: flex;
            align-items: center;
        }

        .kullanici_siralama a {
            text-decoration: none;
        }

        .user_resmi {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .kullanici_adi {
            margin: 0;
        }

        .cikis-yap {
            margin-left: 20px;
        }
.header-yazı{
    font-size: 17px;
padding-top: 17px;

}
        /* Diğer stil ayarlarını buraya ekleyebilirsiniz */

    </style>

    <nav class="reklam">
        <div>
                    <pre class="reklamyazisi"><font color="white"> Canlarını kurtarmak
                        için,
                        onların </font> <font color="329ce0">sesi ol!</font>
                    </pre>
            <img class="reklamresmi" src="/images/reklamresmi.png">
        </div>
    </nav >



    <nav class="bagis">
        <div class="bagis_tumu">
                    <span class="bagisyazi1" >Haydi!!!</span>
            <br>
            <span class="bagisyazi1">Sende bir bağışta bulun.</span>
            <br>
            <span class="bagisyazi1">Onlara umut ol.</span>

            <div class="logo_yazi_duzenleme">

                <span class="bagisyazi3">e-pati gündemini takip edin</span>
                <img class="epati_logo" src="/images/e_pati_logolu.png" >

            </div>
        </div>
        <div class="bagis-button-div" style="">
            <button class="donation-button" onclick="window.location.href = '{{ route('bagis_sayfasi') }}';">
                <span>Bağış Yap</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path d="M20.84 4.25a5.5 5.5 0 0 0-7.78 0L12 5.23l-1.06-1.01a5.5 5.5 0 0 0-7.78 7.78L12 21.78l8.84-8.84a5.5 5.5 0 0 0 0-7.78z" />
                </svg>
            </button>

        </div>
    </nav>
    <div class="haber-div" style="width: 100%; height: auto">

        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $haberlerArray = $haberler->toArray();
                $haberlerChunks = array_chunk($haberlerArray, 3);
                $active = true;
                ?>
                <?php foreach ($haberlerChunks as $chunk): ?>
                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                    <div class="card-wrapper container-sm d-flex justify-content-around">
                            <?php foreach ($chunk as $haber): ?>
                        <a href="{{route('show_haber', $haber['id'])}}" style="text-decoration: none; color: #41464b">
                        <div class="card" style="width: 18rem; height: 300px">
                            <img src="<?php echo $haber['haber_image']; ?>" class="card-img-top" style="height: 220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $haber['haber_baslik']; ?></h5>
                            </div>
                        </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                    <?php $active = false; ?>
                <?php endforeach; ?>
            </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>





        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <nav class="hizmet" style="position: relative; top: 0px;">

        <span class="hizmet_yazisi"><h1 style="font-weight: bold">e-Pati Yapılan Hizmetler</h1></span>

        <div>
            <img src="/images/randevu_foto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">{{$sayac->randevu}}</h2>
                <h2 class="hizmet_yazisi2">Gerçekleştirilen</h2>
                <h2 class="hizmet_yazisi2" >Randevu</h2>
            </div>
        </div>

        <div>
            <img src="/images/sahiplenme_foto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">{{$sayac->sahiplen}}</h2>
                <h2 class="hizmet_yazisi2">Sahiplenilen</h2>
                <h2 class="hizmet_yazisi2" >Hayvan</h2>
            </div>
        </div>

        <div>
            <img src="/images/kayipfoto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">{{$sayac->kayip}}</h2>
                <h2 class="hizmet_yazisi2">Bulunan</h2>
                <h2 class="hizmet_yazisi2" >Kayıplar</h2>
            </div>
        </div>

        <div>
            <img src="/images/esfoto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">{{$sayac->es_bul}}</h2>
                <h2 class="hizmet_yazisi2">Bulunan eş</h2>
                <h2 class="hizmet_yazisi2" >Adayları</h2>
            </div>
        </div>

    </nav>
        <link href="/css/anasayfa.css" rel="stylesheet">

@endsection
