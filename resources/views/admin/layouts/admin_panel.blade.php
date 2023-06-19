<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    @yield('css_js')
</head>
<body>
<style>
    .circle-image1 {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="{{ route('admin_panel') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <div class="circle-image1">
                    <img src="/images/logo.png" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">e-Pati</font></font></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin_panel') }}" class="nav-link text-white">
                        Ana Sayfa
                    </a>
                </li>
                <li>
                    <a href="{{ route('haberler') }}" class="nav-link text-white">
                        Haberler
                    </a>
                </li>
                <li>
                    <a href="{{ route('veteriner_sertifika_onay') }}" class="nav-link text-white">
                        Veteriner Sertifika Onay
                    </a>
                </li>
                <li>
                    <a href="{{ route('sahiplenme_ilanlari') }}" class="nav-link text-white">
                        Sahiplenme İlanları
                    </a>
                </li>
                <li>
                    <a href="{{ route('kayip_ilanlari') }}" class="nav-link text-white">
                        Kayıp İlanları
                    </a>
                </li>
                <li>
                    <a href="{{ route('es_bulma_ilanlari') }}" class="nav-link text-white">
                        Eş Bulma İlanları
                    </a>
                </li>
                <li>
                    <a href="{{ route('raporlar') }}" class="nav-link text-white">
                        Raporlar
                    </a>
                </li>
                <li>
                    <a href="{{ route('kullanicilar') }}" class="nav-link text-white">
                        Kullanıcılar
                    </a>
                </li>
                <li>
                    <a href="{{ route('veterinerler') }}" class="nav-link text-white">
                        Veterinerler
                    </a>
                </li>
                <li>
                    <a href="{{ route('yoneticiler') }}" class="nav-link text-white">
                        Yöneticiler
                    </a>
                </li><br><br><br><br><br><br><br><br><br><br><br>

                <div class="dropdown">
                    <a href="{{ route('admin_profil', ['id'=>Auth::id()]) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <div class="circle-image1">
                            <img src="{{ asset(Auth::user()->user_image) }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ Auth::user()->username }}</font></font></span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('admin_profil', ['id'=>Auth::id()]) }}" class="nav-link text-white">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link text-white">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: red;">{{ __('Oturumu Kapat') }}</font></font>
                            </a>
                            <form class="log-out" style="" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <!--
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/images/user.png" class="user_resmi" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin</font></font></strong>
                    </a>
                    <hr>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
                        <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ayarlar</font></font></a></li>
                        <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profil</font></font></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ __('Oturumu Kapat') }}</font></font></a>
                            <form class="log-out" style="" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    -->
                </div>
            </ul>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            @yield('content')

        </main>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
