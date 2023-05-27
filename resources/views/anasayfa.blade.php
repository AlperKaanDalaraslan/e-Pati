@extends('layouts.app')
@section('title')
    Anasayfa
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
            top: 1767px;
            width: 100%;
            height: 391px;
            z-index: 31;
        }
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
        <div>
                    <pre class="bagisyazi1" >Haydi!!!
Sende bir bağışta bulun.
Onlara umut ol.</pre>
            <div class="logo_yazi_duzenleme">

                <img class="epati_logo" src="/images/e_pati_logolu.png" >
                <pre class="bagisyazi3">e-pati gündemini takip edin
            </pre>

            </div>
        </div>



    </nav>


    <nav class="hizmet">

        <pre class="hizmet_yazisi"><h1>e-Pati Yapılan Hizmetler</h1></pre>

        <div>
            <img src="/images/randevu_foto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">-</h2>
                <h2 class="hizmet_yazisi2">Gerçekleştirilen</h2>
                <h2 class="hizmet_yazisi2" >Randevu</h2>
            </div>
        </div>

        <div>
            <img src="/images/sahiplenme_foto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">-</h2>
                <h2 class="hizmet_yazisi2">Sahiplenilen</h2>
                <h2 class="hizmet_yazisi2" >Hayvan</h2>
            </div>
        </div>

        <div>
            <img src="/images/kayipfoto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">-</h2>
                <h2 class="hizmet_yazisi2">Bulunan</h2>
                <h2 class="hizmet_yazisi2" >Kayıplar</h2>
            </div>
        </div>

        <div>
            <img src="/images/esfoto.png" class="hizmetimage" >

            <div class="card-body">
                <h2 class="hizmet_yazisi2">-</h2>
                <h2 class="hizmet_yazisi2">Bulunan eş</h2>
                <h2 class="hizmet_yazisi2" >Adayları</h2>
            </div>
        </div>

    </nav>

@endsection
