@extends('layouts.app')

@section('title')
    Eş Bulma
@endsection

@section('css_js')
    <link rel="stylesheet" href="/css/sahiplenilecek_hayvan.css">
@endsection
@section('content')
    <h1 style="text-align: center;">Eş Bulma</h1>

    <div class="container">
        <div class="hayvan_kart">
            <nav>
                <div class="resim_bilgi_birleştirme">

                    <div class="resim_divi">
                        <img src="sahiplenme_images/sahiplenme_sayfasi_foto.png" class="hayvan_kart_resim" >
                    </div>

                    <div class="right">
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/options-lines.png" alt="" class="kart-resimleri" ><p class="title">Kedi</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/pin.png" alt="" class="kart-resimleri"><p class="location">Selçuklu, Konya</p>
                        </div>
                        <div class="yan-yana-birleştirme">
                            <img src="sahiplenme_images/clock.png" alt="" class="kart-resimleri"><p class="date">18.04.2023</p>
                        </div>
                    </div>

                </div>
            </nav>


            <nav class="duzenleme">
                <div>
                    <h3 class="bilgi_basligi">BAŞLIKKKKKKKKKKKKKK KKKKKKKKKKKKKKKKK KKKKKKKKKKKKKKK</h3>
                    <pre class="bilgi_yazisi"> Daha 1 aylık olan küçük yavrumuza yuva arıyorum. Kedimiz yavruladı ama benim
o kadar kediye bakacak gücüm yok. Yavrumuzu sevip ömür boyu ona bakabilecek
Yuva arıyoruz.
                        </pre>
                </div>



                <div>
                    <table>
                        <tr><td class="ilkyazi">İsim :</td><td class="ikinciyazi">alper</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">İsim :</td><td class="ikinciyazi">alper</td></tr>
                        <tr><td class="ilkyazi">Cins :</td><td class="ikinciyazi">-----</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Soyisim :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi">Kısırlık Durumu :</td><td class="ikinciyazi">-----</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">Telefon :</td><td class="ikinciyazi">-----</td></tr>
                        <tr><td class="ilkyazi">Yaş :</td><td class="ikinciyazi">-----</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="ilkyazi">email :</td><td class="ikinciyazi">-----</td></tr>
                    </table>
                </div>

            </nav>


        </div>
    </div>

@endsection

