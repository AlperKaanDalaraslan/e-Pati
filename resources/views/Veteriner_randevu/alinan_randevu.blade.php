@extends('layouts.app')
@section('title')
    Randevu
@endsection
@section('css_js')
    <link href="/css/profil.css" rel="stylesheet" >
    <style>
        .profili_düzenle_button_border {
            width: 190px;
            font-family: "Nunito Sans";
            font-weight: bold;
            background-color: transparent;
            border-width: 3px;
            border-color: #c62828;
            color: #c62828;
            border-style: solid;
            border-radius: 11px;
            text-align: center;
            padding: 6px 24.5px;
            cursor: pointer;
        }

        .profili_düzenle_button_border:hover {
            background-color: #c62828;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    <body>

    <div class="kullanici_profil_kart" >
        <div class="kullanici_profil_baslik" style="display: flex; justify-content: center; align-items: center; ">
            <b class="username_baslik">Randevunuz</b>
        </div>
        <div class="kullanici_profil_bilgi">
            <div class="profil-resim-div">


                <img src="{{ $randevu->getVeteriner->user_image }}" alt="" class="kullanici_profil_resim">
            </div>
            <div class="kullanici_yazi_bilgi" style="top: 10px">
                <h1 style="font-weight: bold; color: black; font-style: normal">{{$randevu->getVeteriner->klinik_ad}}</h1>
                <span>Randevu Tarihiniz &nbsp&nbsp:</span>&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{$randevu->randevu_tarih}}</span><br>
                <span>Randevu Saatiniz &nbsp&nbsp&nbsp&nbsp:</span>&nbsp&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{ $randevu->randevu_saat}}</span><br>
                <span>Veteriner tel &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{$randevu->getVeteriner->getUser->tel}}</span> <br>
                <span>Veteriner email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{$randevu->getVeteriner->getUser->email}}</span> <br>
                <span>Veteriner adres &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{$randevu->getVeteriner->adres}}</span> <br>
                <span>Randevu onay durumu &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp
                    @if($randevu->onay == 0)
                    <span class="kullanici_yazi_bilgi_alt" style="color: red">Henüz Onaylanmadı</span>
                @else
                    <span class="kullanici_yazi_bilgi_alt" style="color: limegreen">Randevu Veterineriniz Tarafından Onaylandı</span>

                @endif
                 <br>


            </div>
        </div>
        <div class="profili_duzenle_button_div">
            <a href="#" class="profili_duzenle_button_div" style="text-decoration: none;" onclick="onayla(event, {{ $randevu->randevu_id }})">
                <div class="profili_düzenle_button_border">Randevu iptal</div>
            </a>
        </div>

    </div>

    <script>
        function onayla(event, randevuId) {
            event.preventDefault();
            if (confirm("Randevuyu silmek istiyor musunuz?")) {
                var url = "/Randevu-iptal/" + randevuId;
                window.location.href = url;
            }
        }
    </script>
@endsection
