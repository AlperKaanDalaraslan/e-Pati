@extends('layouts.vet_app')
@section('title')
    PROFİL
@endsection
@section('css_js')
    <link href="/css/vet_uzmanlik.css" rel="stylesheet" >
@endsection
@section('content')
    <form type="GET" action="{{route('Vet_uzmanlik_form_post')}}">
    <div class="container">
        <h2>Uzmanlık Alanı</h2>

<div class="checkbox-table">
    <div class="checkbox-row">
        <div class="checkbox-cell">
            <input type="checkbox" id="cerrahi" name="cerrahi" value="1" {{ $data->cerrahi == "1" ? 'checked' : '' }}>
            <label for="cerrahi">Cerrahi </label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="teshis" name="teshis" value="1" {{ $data->teshis == 1 ? 'checked' : '' }}>
            <label for="teshis">Teshis</label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="kuafor" name="kuafor" value="1" {{ $data->kuafor == 1 ? 'checked' : '' }}>
            <label for="kuafor">Kuaför</label>
        </div>
    </div>
    <div class="checkbox-row">
        <div class="checkbox-cell">
            <input type="checkbox" id="dahiliye" name="dahiliye" value="1" {{ $data->dahiliye == 1 ? 'checked' : '' }}>
            <label for="dahiliye">Dahiliye</label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="lab" name="lab" value="1"{{ $data->lab == 1 ? 'checked' : '' }}>
            <label for="lab">Lab</label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="muayene" name="muayene" value="1" {{ $data->muayene == 1 ? 'checked' : '' }}>
            <label for="muayene">Muayene</label>
        </div>
    </div>
    <div class="checkbox-row">
        <div class="checkbox-cell">
            <input type="checkbox" id="koruyucu_hekim" name="koruyucu_hekim" value="1" {{ $data->koruyucu_hekim == 1 ? 'checked' : '' }}>
            <label for="koruyucu_hekim">Koruyucu Hekim</label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="rontgen" name="rontgen" value="1"{{ $data->rontgen == 1 ? 'checked' : '' }}>
            <label for="rontgen">Röntgen</label>
        </div>
        <div class="checkbox-cell">
            <input type="checkbox" id="yogun_bakim" name="yogun_bakim" value="1" {{ $data->yogun_bakim == 1 ? 'checked' : '' }}>
            <label for="yogun_bakim">Yoğun Bakım</label>
        </div>
    </div>
</div>
        <button type="submit" class="submit-button">Kaydet</button>

</div>


    </form>
@endsection
