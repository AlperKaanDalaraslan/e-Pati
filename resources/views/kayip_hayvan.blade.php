@extends('layouts.app')

@section('title')
    Kayıp Hayvan
@endsection

@section('css_js')
    <link rel="stylesheet" href="/css/sahiplenilecek_hayvan.css">
    <style>
        .kayip-bold {
            font-weight: bold;
        }

        .kayip-bold::after {
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
    <h1 style="text-align: center;">Kayıp Hayvan</h1>
    @if(session('success'))
        <div class="alert alert-success" role="alert" style="width: 1000px; margin: 0 auto;">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" role="alert" style="width: 1000px; margin: 0 auto; background-color: red; color: white;">
            <i class="fas fa-times-circle"></i> {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="image-wrapper">
            <img class="ilan_img" src="{{$data->hayvan_image}}" alt="Resim">
            <div class="info-wrapper">
                <div class="info">
                    <img class="icon" src="/images/kategori.png">
                    <span>{{$data->getTur->tur_ad}}</span>
                </div>
                <div class="info">
                    <img class="icon" src="/images/location.png">
                    <span>{{$data->ilce}}, {{$data->getIl->title}}</span>
                </div>
                <div class="info">
                    <img class="icon" src="/images/time.png">
                    <span>{{$data->created_date}}</span>
                </div>
            </div>
        </div>
        <div class="title">{{$data->baslik}}</div>
        <div class="description">{{$data->aciklama}}</div>
        <div class="u_info">
            <div class="user-info">
                <div class="item">
                    <span><span style="color: #41464b">İsim@php echo str_repeat('&nbsp;', 23);@endphp:</span> {{$data->hayvan_ad}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Durumu@php echo str_repeat('&nbsp;', 16);@endphp:</span> {{$data->kayip_durumu == 1 ? 'Kayıp':'Bulunan'}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Cinsiyet@php echo str_repeat('&nbsp;', 16);@endphp:</span>  {{$data->cinsiyet == 1 ? 'Dişi':'Erkek'}}</span>
                </div>




            </div>
            <div  style="" class="user-info2">
                <div class="item">
                    <span><span style="color: #41464b">İsim@php echo str_repeat('&nbsp;', 8);@endphp:</span> {{$data->getUser->name}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Soyisim@php echo str_repeat('&nbsp;', 2);@endphp:</span> {{$data->getUser->surname}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Email@php echo str_repeat('&nbsp;', 5);@endphp:</span> {{$data->getUser->email}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Telefon@php echo str_repeat('&nbsp;', 3);@endphp:</span> {{$data->getUser->tel}}</span>
                </div>
                <div class="item">
                    <span><span style="color: #41464b">Adres@php echo str_repeat('&nbsp;', 5);@endphp:</span> {{$data->adres}}</span>
                </div>

            </div>
        </div>
        @if(Auth::user()->id === $data->getUser->id)
        <a href="{{route('kayip_hayvan_duzenle',$data->id)}}" class="edit-button">İlanı Düzenle</a>
        @else
            <a href="{{route('rapor_form', ['ilan_tur'=> 2 ,$data->id])}}" class="rapor-button">İlanı Raporla</a>
        @endif
    </div>

@endsection

