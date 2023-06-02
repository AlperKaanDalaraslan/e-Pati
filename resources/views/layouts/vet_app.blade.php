<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>e Pati | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="/css/anasayfa.css" rel="stylesheet">
    <style>
        .kullanici_siralama{
            padding: 10px  ;
            display: flex;
            align-items: center}
        .dropdown-menu{
            padding-left: 30px;
            font-size: 25.232px;
            font-family: "Myriad Pro";
            color: rgb(81, 83, 85);
            line-height: 0.5 ;
        }
        .kullanici_adi{
            font-size: 25.232px;
            font-family: "Myriad Pro";
            color: rgb(81, 83, 85);
            line-height: 0.5 ;
        }
        .header {
            font-family: "Nunito Sans";
        }

    </style>

    @yield('css_js')
    <!-- Scripts -->

</head>
<body>
<section class="main">
    <nav class="header" >
        <a href={{route('Veteriner_anasayfa')}} class="logo">
            <img src="/images/logo.png">
        </a>

        <ul>


            <li>
                <a href="{{route('Veteriner_anasayfa')}}">
                    <p class="menuyazisi"><span class="veteriner-bold">  VETERİNER ANASAYFA</span>  </p>
                </a>
            </li>
            <li>
                <p class="menucizgisi"></p>
            </li >
            <li>
                <a href="{{route('Randevularim')}}">
                    <p class="menuyazisi"><span class="randevu-bold"> GELECEK RANDEVULARIM</span>  </p>
                </a>
            </li>


        </ul>
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}"> <img src="/images/girisyap.png " class="kayitol-girisyap"> </a>

            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}"> <img src="/images/kayitol.png" class="kayitol-girisyap" > </a>

            @endif
        @else
            <div class="kullanici_siralama">
                <div ><a href="{{route('Vet_profil')}}"> <img src="/images/user.png" class="user_resmi" ></a></div>
                <div > <a href="{{route('Vet_profil')}}"> <p class="kullanici_adi" > {{Auth::user()->getVeteriner->klinik_ad}} </p></a> </div>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('çıkış yap') }}
                    </a>

                    <form class="log-out" style="" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
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
