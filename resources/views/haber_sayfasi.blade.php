@extends('layouts.app')
@section('title')
    Anasayfa
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/sahiplenilecek_hayvan.css">
    <link rel="stylesheet" href="/css/haber.css">

@endsection
<style>

</style>
@section('content')
    <div class="giris_navbar">
            <a href="javascript:history.back()"><b>&#129040; Geri</b></a>
        <b class="baslik">Haber Sayfası</b>
    </div>
    <div class="haber-div2">
        <img src="{{$data->haber_image}}" alt="Haber Resmi">
        <h2 class="haber-baslik">{{$data->haber_baslik}}</h2>
        <p class="haber-aciklama">{{$data->haber_icerik}}</p>
    </div>
@endsection
