@extends('layouts.vet_app')
@section('title')
    Veteriner Anasayfa
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/veteriner_anasayfa.css">
@endsection
@section('content')

    <div class="kutu">



        <h1 class="baslik">Çalışma Günleri ve Saatleri</h1>
        <table class="tablo">
            @if(isset($data) && count($data) > 0)

            <tr>
                <th class="baslik-hucre">Gün</th>
                <th class="baslik-hucre">Başlangıç Saati</th>
                <th class="baslik-hucre">Bitiş Saati</th>
            </tr>
                @foreach($gunler as $index => $gun)
                    @php
                        $veri = $data->where('gun', $index + 1)->first();
                    @endphp
                    <tr>
                        @if(!empty($veri))
                            <td class="veri-hucre">{{ $gun }}</td>
                            <td class="veri-hucre">{{$veri->randevu_bas}} </td>
                            <td class="veri-hucre">{{$veri->randevu_bit}} </td>
                        @else
                            <td class="veri-hucre">{{ $gun }}</td>
                            <td class="veri-hucre"> - </td>
                            <td class="veri-hucre"> - </td>
                        @endif
                    </tr>
                @endforeach



            <td class="islem-buttons">
                <a href="{{route('Vet_calisma_form')}}">
                    <button class="incele" >Düzenle</button>
                </a>

            </td>
            @else
                <h1 style="color: red">
                    Randevu gelmesi İçin Çalışma saatlerinizi Girmelisiniz
                </h1>
                <td class="islem-buttons">
                    <a href="{{route('Vet_calisma_form')}}">
                        <button class="incele" >Düzenle</button>
                    </a>

                </td>
            @endif


        </table>

    </div>
    <div class="container">
        <h1>Uzmanlık Alanları</h1>

        <ul><?php $i = 0?>
            @if(!empty($uzmanliklar))

            @foreach($uzmanlik_isim as $uzmanlik)
                @if($uzmanliklar[$uzmanlik])
            <li><span class="expertise">{{$uzmanlik}}</span>  </li>
                        <?php $i = 1?>
                @endif

            @endforeach
            @endif
            @if($i == 0)
                <h4 style="color: red">LÜTFEN UZMANLIK ALANLARINIZI GİRİNİZ</h4>
            @endif



        </ul>

            <button class="incele_uzmanlik" type="button" onclick="window.location.href = '{{route('Vet_uzmanlik_form')}}';" >Düzenle</button>


    </div>
<div class="randevu-listesi">
    <h1 style="color: red">Randevular</h1>
    <div class="scrollable">
        <table>
            <thead>
            <tr>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Email</th>
                <th>Randevu nedeni</th>
                <th>Randevu Tarihi</th>
                <th>Randevu Saati</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <!-- Randevu kayıtlarını burada listele -->
            <tr>
                <td>Alper Kaan</td>
                <td>Dalarslan</td>

                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>Jane</td>
                <td>Smith</td>
                <td>jane@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection


