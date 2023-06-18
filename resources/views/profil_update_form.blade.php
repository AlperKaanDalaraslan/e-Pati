@extends('layouts.app')
@section('title')
    PROFİL
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="/css/profil.css" rel="stylesheet" >
    <link href="/css/sign_up.css" rel="stylesheet">

    <style>
        table{
            border: 0px;
        }
        .scrollable{
            width: 97%;
            margin-left: 10px;
        }
        .tekrar-randevu {
            background-color: DodgerBlue;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center"><h1>{{ __('Bilgileri Güncelle') }}</h1></div>
                    @if($errors->any())
                        <div class="alert alert-danger" style="color: red;">{{$errors->first()}}</div>
                    @endif
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('update_form_post') }}">
                            @csrf
                            <div class="row mb-3" style="display: flex; flex-wrap: nowrap">
                                <div class="col-md-6">
                                <img src="{{$user->user_image}}" style="width: 80px; height: 80px; border-radius: 50%">
                                </div>
                                <div class="col-md-6" style="padding-left: 20px">
                                    <label for="user_image" class="col-md-4 col-form-label text-md-end">{{ __('Kullanıcı Foto') }}</label>
                                    <input id="image" type="file" class="form-control" name="image" value="" >
                                    <br>
                                    <br>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Kullanıcı Adı') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Ad') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Soyad') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Addresiniz') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefon Numaranız') }}</label>
                                <div class="col-md-6">
                                    <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ $user->tel }}" required autocomplete="tel">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Değişiklikleri Kaydet') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
