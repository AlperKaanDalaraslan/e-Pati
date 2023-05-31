@extends('layouts.vet_app')
@section('title')
    PROFİL
    @endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/profil.css" rel="stylesheet" >
@endsection
@section('content')
<body>

<div class="kullanici_profil_kart" >
    <div class="kullanici_profil_baslik" style="display: flex; justify-content: center; align-items: center; ">
        <b class="username_baslik">{{Auth::user()->getVeteriner->klinik_ad}}</b>
    </div>
    <div class="kullanici_profil_bilgi">
        <div class="profil-resim-div">



        <img src="{{ asset(Auth::user()->user_image ?: '/images/user_2.png' )}}" alt="" class="kullanici_profil_resim">
        </div>
        <div class="kullanici_yazi_bilgi">
            <span>Telefon &nbsp&nbsp:</span>&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->tel}}</span><br>
            <span>email &nbsp&nbsp&nbsp&nbsp:</span>&nbsp&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->email}}</span><br>
            <span>Adres &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->getVeteriner->adres}}</span> <br>


        </div>
    </div>
    <div class="profili_duzenle_button_div">
        <a href="#" class="profili_duzenle_button_div" style="text-decoration: none;">

            <div class="profili_düzenle_button_border">Profili Düzenle</div>
        </a>

    </div>

</div>
@endsection
