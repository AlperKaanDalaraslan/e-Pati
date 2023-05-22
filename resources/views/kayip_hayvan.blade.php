@extends('layouts.app')

@section('title')
    Kayıp Hayvan
@endsection

@section('css_js')
    <link rel="stylesheet" href="/css/sahiplenilecek_hayvan.css">
@endsection
@section('content')
    <h1 style="text-align: center;">Kayıp Hayvan</h1>

    <div class="container">
        <div class="hayvan_kart">
            <nav>
                <div class="resim_bilgi_birleştirme">

                    <div class="resim_divi">
                        <img src="{{}}" class="hayvan_kart_resim" >
                    </div>

                    <div class="right">
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/options-lines.png" alt="" class="kart-resimleri" ><p class="title">$data->tur</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/pin.png" alt="" class="kart-resimleri"><p class="location">{{$data->ilce}}, {{$data->getIl->title}}</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/clock.png" alt="" class="kart-resimleri"><p class="date">{{$data->created_at}}</p>
                        </div>
                    </div>

                </div>
            </nav>


            <nav class="duzenleme">
                <div>
                    <h3 class="bilgi_basligi">{{$data->baslik}}</h3>
                    <pre class="bilgi_yazisi"> {{$data->aciklama}}
                        </pre>
                </div>



                <div>
                    <table>
                        <tr><td class="ilkyazi">İsim :</td><td class="ikinciyazi">{{$data->hayvan_ad}}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">İsim :</td><td class="ikinciyazi">alper</td></tr>
                        <tr><td class="ilkyazi">Cins :</td><td class="ikinciyazi">{{$data->cins}}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Soyisim :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi">Çip No :</td><td class="ikinciyazi">{{$data->cip_no}}</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Telefon :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi"></td>Durumu :<td class="ikinciyazi">
                                @if($data->kayip == 0 || $data->kayip == NULL)
                                    Bulunan
                                @else
                                    Kayip
                                @endif
                            </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">email :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi"></td><td class="ikinciyazi"></td><td></td><td></td><td><td></td><td></td><td></td></td><td></td><td class="ilkyazi">Adres :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi"></td><td class="ikinciyazi"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    </table>
                </div>

            </nav>


        </div>
    </div>

@endsection

