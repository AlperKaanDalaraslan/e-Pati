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
        width: 97%;
        margin-left: 10px;
    }
    .tekrar-randevu {
        background-color: DodgerBlue;
        color: white;
    }
</style>
@endsection
@section('content')
<body>
@if(session('success'))
    <div class="alert alert-success" role="alert" style="width: 1000px; margin: 0 auto;">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
    </div>
@endif


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
        <a href="{{route('update_form')}}" class="profili_duzenle_button_div" style="text-decoration: none;">

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
                                <td>Onay durumu: @if($randevu->onay == 0) <span style="color: red; font-weight: bold">Onay Bekleniyor</span> @else <span style="color: greenyellow; font-weight: bold">Onaylandı</span> @endif</td>
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
                <div class="scrollable" >
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
                <div class="randevu-listesi">
                    <h1 style="color: dodgerblue">Verdiğim ilanlarım</h1>

                        <div class="scrollable" >
                            <table>
                                <tbody>
                                <?php $kontrol = 0?>
                                @foreach($sahiplen_ilanlarim as $ilan_s)
                                    <tr>
                                        <td style="font-weight: bold">Sahiplendirme ilanı</td>
                                        <td>{{$ilan_s->hayvan_ad}}</td>
                                        <td>{{$ilan_s->created_date}}</td>
                                        <td>
                                            <button class="ilan-incele-button" type="button" onclick="window.location.href = '{{route('sahiplenilecek_hayvan',$ilan_s->id)}}';">İlanı İncele</button>
                                        </td>
                                        <td>
                                            <button class="ilan-onayla-button" type="button" onclick="window.location.href = '{{route('S_ilanı_onayla',$ilan_s->id)}}';">İlanı Onayla</button>
                                        </td>
                                        <td>
                                            <button class="ilan-sil-button" type="button" onclick="window.location.href = '{{route('s_ilan_sil',$ilan_s->id)}}';">İlanı Sil</button>
                                        </td>
                                            <?php $kontrol = 1?>
                                    </tr>
                                @endforeach
                                @foreach($kayip_ilanrim as $ilan_k)
                                    <tr>
                                        <td style="font-weight: bold">Kayıp ilanı</td>
                                        <td>{{$ilan_k->kayip_durumu == 1 ? 'Kayıp':'Bulunan'}}</td>
                                        <td>{{$ilan_k->created_date}}</td>
                                        <td>
                                            <button class="ilan-incele-button" type="button" onclick="window.location.href = '{{route('kayip_hayvan',$ilan_k->id)}}';">İlanı İncele</button>
                                        </td>
                                        <td>
                                            <button class="ilan-onayla-button" type="button" onclick="window.location.href = '{{route('K_ilanı_onayla',$ilan_k->id)}}';">İlanı Onayla</button>
                                        </td>
                                        <td>
                                            <button class="ilan-sil-button" type="button" onclick="window.location.href = '{{route('k_ilan_sil',$ilan_k->id)}}';">İlanı Sil</button>
                                        </td>
                                            <?php $kontrol = 1?>
                                    </tr>
                                @endforeach
                                @foreach($es_bul_ilanrim as $ilan_e)
                                    <tr>
                                        <td style="font-weight: bold">Eş Bulma ilanı</td>
                                        <td>{{$ilan_e->hayvan_ad}}</td>
                                        <td>{{$ilan_e->created_date}}</td>
                                        <td>
                                            <button class="ilan-incele-button" type="button" onclick="window.location.href = '{{route('es_bulma_hayvan',$ilan_e->id)}}';">İlanı İncele</button>
                                        </td>
                                        <td>
                                            <button class="ilan-onayla-button" type="button" onclick="window.location.href = '{{route('E_ilanı_onayla',$ilan_e->id)}}';">İlanı Onayla</button>
                                        </td>
                                        <td>
                                            <button class="ilan-sil-button" type="button" onclick="window.location.href = '{{route('e_ilan_sil',$ilan_e->id)}}';">İlanı Sil</button>
                                        </td>
                                            <?php $kontrol = 1?>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @if($kontrol === 0)
                                <h1>İlanınız Bulunmamaktadır</h1>
                            @endif
                        </div>
                </div>

        </div>


    </div>

</div>
@endsection
