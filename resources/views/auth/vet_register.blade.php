@extends('layouts.app')
@section('css_js')
    <link href="/css/sign_up.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/sahiplendir_ilan_form.css" rel="stylesheet" >
    <style>
        .custom-button {
            background-color: #4fc3f7;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #29b6f6;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center"><h1>{{ __('VETERİNER KAYIT') }}</h1></div>
                    @if($errors->any())
                        <div class="alert alert-danger" style="color: red;">{{$errors->first()}}</div>
                    @endif
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('vet_register_post') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="user_image" class="col-md-4 col-form-label text-md-end">{{ __('Klinik Foto') }}</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image" value="{{ old('user_image') }}" required >
                                    <br>
                                    <br>


                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Klinik Adı') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('klinik_ad') is-invalid @enderror" name="klinik_ad" value="{{ old('klinik_ad') }}" required autocomplete="username" autofocus>

                                    @error('klinik_ad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Adresiniz') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <label for="sehir">Şehir:</label>
                            <select class="custom-select" id="Iller" name="il_id" required>
                                <option value="">Lütfen Bir İl Seçiniz</option>
                            </select>

                            <label for="ilce">İlçe:</label>
                            <select class="custom-select" id="Ilceler" name="ilce" disabled="disabled" required>
                                <option value="">Lütfen Önce bir İl seçiniz</option>
                            </select>

                            <label for="adres">Adres:</label>
                            <textarea id="adres" name="adres" rows="4" cols="50" required></textarea>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Şifre') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Şifreyi Doğrula') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="custom-button">
                                        {{ __('Register') }}
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
