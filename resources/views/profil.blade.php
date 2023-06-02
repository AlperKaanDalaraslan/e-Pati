@extends('layouts.app')
@section('title')
    PROFİL
    @endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/profil.css" rel="stylesheet" >
    <link href="/css/veteriner_anasayfa.css" rel="stylesheet" >
<style>
    table{
        border: 0px;
    }
    .scrollable{
        width: 99%;
    }
    .tekrar-randevu {
        background-color: DodgerBlue;
        color: white;
    }
</style>
@endsection
@section('content')
<body>

<div class="kullanici_profil_kart" >
    <div class="kullanici_profil_baslik" style="display: flex; justify-content: center; align-items: center; ">
        <b class="username_baslik">{{Auth::user()->username}}</b>
    </div>
    <div class="kullanici_profil_bilgi">
        <div class="profil-resim-div">



        <img src="{{ asset(Auth::user()->user_image ?: '/images/user_2.png' )}}" alt="" class="kullanici_profil_resim">
        </div>
        <div class="kullanici_yazi_bilgi">
            <span>İsim &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span >&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->name}}</span> <br>
            <span>Soyisim &nbsp:</span>&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->surname}}</span><br>
            <span>Telefon &nbsp&nbsp:</span>&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->tel}}</span><br>
            <span>email &nbsp&nbsp&nbsp&nbsp:</span>&nbsp&nbsp&nbsp&nbsp<span class="kullanici_yazi_bilgi_alt">{{Auth::user()->email}}</span><br>

        </div>
    </div>
    <div class="profili_duzenle_button_div">
        <a href="#" class="profili_duzenle_button_div" style="text-decoration: none;">

            <div class="profili_düzenle_button_border">Profili Düzenle</div>
        </a>
        <div class="randevu-listesi">
            <h1 style="color: dodgerblue">Alınan Randevularım</h1>
            @if($randevular && count($randevular) > 0)
                <div class="scrollable">
                    <table>
                        <tbody>
                        @foreach($randevular as $randevu)
                            <tr>
                                <td>{{$randevu->getVeteriner->klinik_ad}}</td>
                                <td>{{$randevu->randevu_tarih}}/{{$randevu->randevu_saat}}</td>

                                <td>{{$randevu->getVeteriner->getIL->title}}/{{$randevu->getVeteriner->ilce}}</td>
                                <td>Onay durumu: @if($randevu->onay == 0) <span style="color: red; font-weight: bold">Onay Bekliyor</span> @else <span style="color: greenyellow; font-weight: bold">Onaylandı</span> @endif</td>
                                <td></td>
                                <td class="islem-buttons">

                                    <button class="sil" type="button" onclick="window.location.href = '{{ route('profil_show_randevu', ['id' => $randevu->randevu_id]) }}';">Randevu Detay</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h1>Randevunuz Bulunmamaktadır!!</h1>
                    @endif
                </div>
        </div>
        <div class="randevu-listesi">
            <h1 style="color: red">Geçmiş Randevularım</h1>
            @if($gecmis_randevular && count($gecmis_randevular) > 0)
                    <?php $tarih = \Carbon\Carbon::tomorrow(); ?>
                <div class="scrollable">
                    <table>
                        <tbody>

                        @foreach($gecmis_randevular as $randevu)
                            <tr>
                                <td>{{$randevu->getVeteriner->klinik_ad}}</td>
                                <td>{{$randevu->randevu_tarih}}/{{$randevu->randevu_saat}}</td>

                                <td>{{$randevu->getVeteriner->getIL->title}}/{{$randevu->getVeteriner->ilce}}</td>
                                <td class="islem-buttons">
                                    <button class="tekrar-randevu" type="button" onclick="window.location.href = '{{ route('randevu_alma', ['id' => $randevu->getVeteriner->vet_id, 'tarih' => $tarih]) }}';">Tekrar Randevu Al</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h1>Geçmiş Randevunuz Bulunmamaktadır!!</h1>
                    @endif
                </div>
        </div>
<!--
    </div>
    <div class="kullanici_veteriner_randevu_baslik">
        <h1 >Veteriner Randevularım</h1>
    </div>
    <div class="kullanici_randevu_liste">
        <ul>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>,

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Konya Pet</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_turu">Kısırlık</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p><p>16.30</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İptal Et</div></a></div>
                </div></li>

        </ul>
    </div>





    <div class="kullanici_veteriner_randevu_baslik">
        <h1 >Verdiğim İlanlar</h1>
    </div>
    <div class="kullanici_randevu_liste">
        <ul>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Sahiplendirme</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_onayla">İlanı Onayla</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>


            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>


            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>


            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>


            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>

            <li><div class="kullanici_veteriner_randevu_kart">
                    <div class="kullanici_veteriner_randevu_kart_klinik_adi">Kayıp İlan</div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_tarihi"><p >18.04.2023</p></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="ilan_button_düzenle">İlanı Düzenle</div></a></div>
                    <div class="kullanici_veteriner_randevu_kart_randevu_iptal"><a href="" style="text-decoration: none;"> <div class="randevu_button">İlanı Sil</div></a></div>
                </div></li>



        </ul>
        -->
    </div>

</div>
@endsection
