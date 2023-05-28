@extends('layouts.app')
@section('title')
    Randevu
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/veteriner_randevu_sayfası.css" rel="stylesheet" >
@endsection
@section('content')

    <div class="veteriner_arama">
        <div class="form-container">
            <form method="GET" action="#" style="height: 100%" >

                <select id="neden" name="neden" required>
                    <option value="" selected>Randevu Nedeni</option>
                    <option value="cerrahi">Cerrahi</option>
                    <option value="teshis">Teşhis</option>
                    <option value="kuafor">Kuaför</option>
                    <option value="dahiliye">Dahiliye</option>
                    <option value="lab">Laboratuvar</option>
                    <option value="muayene">Muayene</option>
                    <option value="koruyucu_hekim">Koruyucu Hekim</option>
                    <option value="rontgen">Röntgen</option>
                    <option value="yogun_bakim">Yoğun Bakım</option>
                </select>


                <select id="Iller" name="il_id" required>
                    <option value="" selected>Bulunduğu İl</option>
                </select>

                <button type="submit">Arama Yap</button>
            </form>
        </div>
    </div>

    <div class="kart">

                @foreach($data as $dt)

                <div class="kart-icerik">
                    <a href="#" style="text-decoration: none; display: inline-block;">
                    <img src="{{$dt->getUser->user_image}}" alt="Veteriner Resmi">
                    <h2 style="font-weight: bold; color: black">{{$dt->getUser->email}}</h2>
                    <hr class="hr_kart">
                    <div class="lokasyon">
                        {{$dt->ilce}}, {{$dt->getIl->title}}
                    </div>
                    </a>
                </div>

                @endforeach

    </div>
    {{$data->links('pagination::bootstrap-4')}}

@endsection
