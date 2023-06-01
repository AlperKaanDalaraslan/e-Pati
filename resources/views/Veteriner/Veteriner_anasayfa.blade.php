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
    <h1 style="color: red">Onaylanacak Randevular</h1>
    @if($onaylanacakrandevular && count($onaylanacakrandevular) > 0)
    <div class="scrollable">
        <table>
            <thead>
            <tr>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Email</th>
                <th>Randevu Tarihi</th>
                <th>Randevu Saati</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <!-- Randevu kayıtlarını burada listele -->

            @foreach($onaylanacakrandevular as $randevu)
            <tr>
                <td>{{$randevu->getUser->name}}</td>
                <td>{{$randevu->getUser->surname}}</td>

                <td>{{$randevu->getUser->email}}</td>
                <td>{{$randevu->randevu_tarih}}</td>
                <td>{{$randevu->randevu_saat}}</td>
                <td class="islem-buttons">
                    <button class="onayla" type="button" onclick="window.location.href = '{{ route('randevu_onayla', ['id' => $randevu->randevu_id]) }}';">Onayla</button>
                    <button class="sil" type="button" onclick="window.location.href = '{{ route('randevu_sil_vet', ['id' => $randevu->randevu_id]) }}';">Sil</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <h1>Onaylanacak Randevunuz bulunmamaktadır!!</h1>
        @endif
    </div>
</div>
    <div class="randevu-listesi">
        <h1 style="color: greenyellow">Onaylanan Randevular</h1>
        @if($onaylananrandevular && count($onaylananrandevular) > 0)
            <div class="scrollable">
                <table>
                    <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Email</th>
                        <th>Randevu Tarihi</th>
                        <th>Randevu Saati</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Randevu kayıtlarını burada listele -->

                    @foreach($onaylananrandevular as $randevu)
                        <tr>
                            <td>{{$randevu->getUser->name}}</td>
                            <td>{{$randevu->getUser->surname}}</td>

                            <td>{{$randevu->getUser->email}}</td>
                            <td>{{$randevu->randevu_tarih}}</td>
                            <td>{{$randevu->randevu_saat}}</td>
                            <td class="islem-buttons">
                                <button class="sil" type="button" onclick="window.location.href = '{{ route('randevu_sil_vet', ['id' => $randevu->randevu_id]) }}';">İptal et</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <h1>Onaylanacak Randevunuz bulunmamaktadır!!</h1>
                @endif
            </div>
    </div>

@endsection


