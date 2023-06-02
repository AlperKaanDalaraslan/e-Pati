<html>
<head>
    <title>
        Veteriner Doğrulama
    </title>
    <link href="/css/sahiplendir_ilan_form.css" rel="stylesheet" >
</head>
@if($kontrol and Auth::user()->getVeteriner->onay != 1)
    <div class="form-bolumu">
        <h1 style="text-align: center"> Veteriner Hesabınız Onay Aşamasındadır!!</h1>
        <h3 style="text-align: center"> Onay Durumu: <span style="color: #ffc107"> Bekleniyor</span></h3>
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
@elseif(Auth::user()->getVeteriner->onay == -1)

    <div class="form-bolumu">
        <h1 style="text-align: center"> Veteriner Hesap Başvurunuz Reddedilmiştir</h1>
        <h3 style="text-align: center"> Onay Durumu: <span style="color: red"> Reddedildi</span></h3>
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
    <form action="{{route('sertifika_post')}}" method="post" class="form-bolumu" enctype="multipart/form-data">
        @csrf
        <label for="foto">Tekrar Başvurmak İçin Sertifika Yükelyiniz:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <input type="submit" value="Gönder">
    </form>
@else
<form action="{{route('sertifika_post')}}" method="post" class="form-bolumu" enctype="multipart/form-data">
    @csrf
    <label for="foto">Lütfen Veteriner Olduğunuzu Doğrulamak için sertikanızı yükleyiniz:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <input type="submit" value="Gönder">
</form>
@endif
</html>
