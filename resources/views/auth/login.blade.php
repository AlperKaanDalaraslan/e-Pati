@extends('layouts.app')
@section('css_js')

    <link rel="stylesheet" href="/css/giris.css" /> <!-- bu css dosyasını okumuyor !!!!!!!!-->
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        width: 100vw;
        background-color: #ffffff;
    }

    .giris_navbar a {
        font-size: 30px;
        font-family: "Microsoft PhagsPa";
        line-height: 0.5;
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 20px 20px;
        text-decoration: none;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin-bottom: 50px;
        margin-top: 50px;

    }
    .sign_up_kismi {
        font-family: "Nunito Sans";
        margin-top: 20px;
        text-align: center;
    }


    form {
        width: 350px;
        margin: 0 20px;
        padding: 30px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f7f7f7;
    }

    h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .blue-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
    }

    a {
        color: #009688;
        text-decoration: none;
    }


</style>

@endsection
@section('content')
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}" class="user-login">
            @csrf
            <h2>Üye Girişi</h2>
            <label for="username">Kullanıcı email</label>
            <input type="text" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password">Şifre:</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button class="blue-button" type="submit">Giriş Yap</button>
            <div class="sign_up_kismi"> Hesabınız yok mu? <a href="{{'register'}}"> Hesap Oluştur</a> </div>
            <div class="sign_up_kismi"><a href="{{route('password.request')}}">Şifremi unuttum</a></div>
        </form>

        <form method="POST" action="{{route('vet_login')}}" class="vet-login">
            @csrf
            <h2>Veteriner Girişi</h2>
            <label for="clinicname">Kullanıcı email</label>
            <input type="text" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password">Şifre:</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button class="blue-button" type="submit">Giriş Yap</button>
            <div class="sign_up_kismi">Yeni veteriner misiniz? <a href="{{route('vet_register')}}">Veteriner hesabı Oluştur</a></div>
            <div class="sign_up_kismi"><a href="{{route('password.request')}}">Şifremi unuttum</a></div>
        </form>
    </div>

@endsection
