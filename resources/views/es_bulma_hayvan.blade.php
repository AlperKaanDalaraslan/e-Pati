@extends('layouts.app')

@section('title')
    Eş Bulma
@endsection

@section('css_js')
    <link rel="stylesheet" href="/css/sahiplenilecek_hayvan.css">
    <style>
        .es-bul-bold {
            font-weight: bold;
        }

        .es-bul-bold::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: blue;
            margin-top: 10px; /* İsteğe bağlı olarak çizginin üst boşluğunu ayarlayabilirsiniz */
        }

    </style>
@endsection
@section('content')
    <h1 style="text-align: center;">Eş Bulma</h1>

    <div class="container">
        <div class="hayvan_kart">
            <nav>
                <div class="resim_bilgi_birleştirme">

                    <div class="resim_divi">
                        <img src="/{{ $data->hayvan_image }}" class="hayvan_kart_resim" >
                    </div>

                    <div class="right">
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/options-lines.png" alt="" class="kart-resimleri" ><p class="title">{{$data->getTur->tur_ad}}</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/pin.png" alt="" class="kart-resimleri"><p class="location">{{ $data->getIl->title }}, {{ $data->ilce }}</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/clock.png" alt="" class="kart-resimleri"><p class="date">{{ $data->created_date }}</p>
                        </div>
                    </div>

                </div>
            </nav>


            <nav class="duzenleme">
                <div>
                    <h3 class="bilgi_basligi">Başlık</h3>
                    <pre class="bilgi_yazisi">{{ $data->aciklama }}</pre>
                </div>



                <div>
                    <table>
                        <tr><td class="ilkyazi">İsim :</td><td class="ikinciyazi">{{ $data->hayvan_ad }}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">İsim :</td><td class="ikinciyazi">{{ $data->getUser->name }}</td></tr>
                        <tr><td class="ilkyazi">Cins :</td><td class="ikinciyazi">{{ $data->cins }}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Soyisim :</td><td class="ikinciyazi">{{ $data->getuser->surname }}</td></tr>
                        <tr><td class="ilkyazi">Cinsiyet</td><td class="ikinciyazi">{{ $data->cinsiyet==1 ? 'Erkek' : 'Dişi' }}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Telefon :</td><td class="ikinciyazi">{{ $data->getUser->tel }}</td></tr>
                        <tr><td class="ilkyazi">Kısırlık Durumu :</td><td class="ikinciyazi">
                                @if($data->kisirlik_durumu==0 || $data->kisirlik_durumu==NULL)
                                    Kısır Değil
                                @else
                                    Kısır
                                @endif
                            </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Telefon :</td><td class="ikinciyazi">{{ $data->getUser->email }}</td></tr>
                        <tr><td class="ilkyazi">Yaş :</td><td class="ikinciyazi">{{ $data->yas }}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">email :</td><td class="ikinciyazi">{{ $data->adres }}</td></tr>
                    </table>
                </div>

            </nav>


        </div>
    </div>

@endsection

