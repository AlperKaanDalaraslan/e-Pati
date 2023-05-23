@extends('layouts.app')
@section('title')
    Sahiplen
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/ilan_sayfalari.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <style>
        .es-bul-bold {
            font-weight: bold;
        }

        .es-bul-bold::after {
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
    <h1 style="text-align: center;">Eş Bulma Sayfası</h1>
    <nav class="sahiplendirme-form-nav">
        <div class="container">
            <div class="sahiplendirme-form">
                <div style="width: 90%; height: 200px; display: flex; flex-direction: column; justify-content: space-around; position: absolute; top: 10%; left: 5%;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="ic-kutular">
                            <label for="city">Bulunduğunuz Şehir:</label><br>
                            <select class="custom-select" id="Iller" required>
                                <option value="">Lütfen Bir İl Seçiniz</option>
                            </select>
                        </div>
                        <div class="ic-kutular">
                            <label for="gender">Cinsiyet:</label><br>
                            <select class="custom-select" id="gender" name="gender">
                                <option value="erkek">Erkek</option>
                                <option value="dişi">Dişi</option>
                            </select>
                        </div>
                        <div class="ic-kutular">
                            <a href="{{route('es_ilan_form')}}" style="text-decoration: none;">
                                <div class="ilan-ver-butonu">İlan Ver</div>
                            </a>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="ic-kutular">
                            <label for="category">Kategori:</label><br>
                            <select class="custom-select" id="category" name="category">
                                <option value="kedi">Kedi</option>
                                <option value="köpek">Köpek</option>
                                <option value="kuş">Kuş</option>
                                <option value="hamter">Hamster</option>
                                <option value="balık">Balık</option>
                            </select>
                        </div>
                        <div class="ic-kutular">
                            <label for="sorting">Akıllı Sıralama:</label><br>
                            <select class="custom-select" id="sorting" name="sorting">
                                <option value="alphabetical">İlan Tarihine Göre</option>
                                <option value="date">Alfabetik</option>
                            </select>
                        </div>
                        <div class="ic-kutular">
                            <button type="submit">Arama Yap</button>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </nav>





    <nav class="sahiplendirme-toplu-kart-nav">
        <div class="sahiplendirme-toplu-kart">

            @foreach($data as $dat)

                <a href="{{route('es_bulma_hayvan',$dat->id)}}" style="text-decoration: none">

                    <div class="sahiplendirme-kart">
                        <div class="yan-yana-birleştirme" >
                            <div class="left">

                                <img src="{{ $dat->hayvan_image }}" class="circle">
                            </div>


                            <div class="right">
                                <h1 class="title">İlan Başlık</h1>
                                <div class="yan-yana-birleştirme">
                                    <div class="kısa-bilgi-divi">
                                        <img src="/images/options-lines.png" class="kart-resimleri"><span class="tur"> {{ $dat->tur }} </span><br>
                                        <img src="/images/pin.png" class="kart-resimleri"><span class="location">{{ $dat->getIl->title }},{{ $dat->ilce }}</span><br>
                                        <img src="/images/clock.png" class="kart-resimleri"><span class="date"> {{ $dat->created_at }} </span><br>
                                    </div>
                                    <div class="aciklama-div">
                                        <div class="description"> {{ $dat->aciklama }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
                {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </nav>

@endsection



