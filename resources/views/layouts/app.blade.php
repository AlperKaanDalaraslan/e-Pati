<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>e Pati | @yield('title')</title>
    <link type="text/css" rel="stylesheet" href="/css/anasayfa.css">
    @yield('css_js')

</head>

<body>
<section class="main">
    <nav>
        <a href={{route('anasayfa')}} class="logo">
            <img src="/images/logo.png">
        </a>

        <ul>
            <li>
                <a href="">
                    <p class="menuyazisi">VETERİNER RANDEVU </p></p>
                </a>
            </li>

            <li>
                <p class="menucizgisi"></p>
            </li >

            <li>
                <a href="{{ route('sahiplenmesayfasi') }}">
                    <p class="menuyazisi"> HAYVAN SAHİPLENME </p>
                </a>
            </li>

            <li>
                <p class="menucizgisi"></p>
            </li>

            <li>
                <a href="">
                    <p class="menuyazisi"> KAYIP İLANI </p>
                </a>
            </li>

            <li>
                <p class="menucizgisi"></p>
            </li>

            <li>
                <a href="">
                    <p class="menuyazisi"> EŞ BULMA</p>
                </a>
            </li>
        </ul>

        <a href=""> <img src="/images/kayitol.png" class="kayitol-girisyap"> </a>
        <a href=""> <img src="/images/girisyap.png" class="kayitol-girisyap" > </a>
    </nav>
    <!--   Header   -->



    @yield('content')



    <!--   Footer   -->

    <nav class="footer ">



        <div class="footerduzenleme">
            <div class="footerduzenlemeic">
                <h1 class="footerbaslik">BİZ KİMİZ ?</h1>
                <hr>
                <pre class="footeryazisi">Biz hayvanseverler topluluğu için kar amacı gütmeyen
bir platform oluşturuyoruz. Bu platformda
veteriner randevuları, hayvan sahiplendirme,
kayıp ilanları ve hayvanlara yardım için bağış toplama
gibi hizmetler sunuyoruz. Amacımız, hayvanseverlerin
tüm ihtiyaçlarını tek bir yerden karşılamalarını sağlamak.
                        </pre>
            </div>
        </div>
        <div class="footerduzenleme">
            <div class="footerduzenlemeic">
                <h1 class="footerbaslik">İLETİŞİM</h1>
                <hr c>
                <pre class="footeryazisi"><a href=""><img src="/images/email.png" ></a>  e_pati@gmail.com

<a href=""><img src="/images/phone-call.png" ></a>  0555 555 55 55

<a href=""><img src="/images/pin.png" ></a>  Üniversite, 23200 Elâzığ Merkez/Elazığ
                        </pre>
            </div>
        </div>

        <div class="footerduzenleme">
            <div class="footerduzenlemeic">
                <h1 class="footerbaslik">BİZİ TAKİP EDİN</h1>
                <hr>
                <pre class="footeryazisi"><a href=""><img src="/images/facebook.png" ></a>               <a href=""><img src="/images/instagram.png" ></a>              <a href=""><img src="/images/twitter.png" ></a>              <a href=""><img src="/images/linkedin.png" ></a>
                        </pre>
            </div>
        </div>

        <div class="footerduzenleme">
            <div class="footerduzenlemeic">
                <h1 class="footerbaslik">BAĞIŞTA BULUN</h1>
                <hr class="cizgikonum">
                <pre class="footeryazisi">Hayvanlar da bizim
gibi sevgi dolu
varlıklardır, onların
mutluluğu ve sağlığı da
bizim sorumluluğumuzdadır.
Lütfen onları sevin,
koruyun ve hayatlarına
dokunacak bir <a href="---------------" style="color:yellow">bağışta bulunun.</a>
                        </pre>
            </div>
        </div>



    </nav>

</section>



</body>



</html>

