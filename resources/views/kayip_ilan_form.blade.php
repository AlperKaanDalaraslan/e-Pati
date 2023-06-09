@extends('layouts.app')
@section('title')
    Kayıp Hayvan İlan Formu
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/sahiplendir_ilan_form.css" rel="stylesheet" >
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
    <div class="giris_navbar">
        <!--    <a href="javascript:history.back()"><b>&#129040; Geri</b></a>    içindeki js kodu bi önceki sayfaya dönmesi için   -->
        <b class="baslik">Kayıp İlan Ver</b>
    </div>
    <form action="{{route('kayip_ilan_post')}}" method="post" class="form-bolumu" enctype="multipart/form-data">
        @csrf
        <label for="foto">Hayvanın Fotoğrafı:</label>
        <input type="file" id="hayvan_foto" name="hayvan_foto" accept="image/*" required>
        <br>
        <br>
        <br>
        <label for="hayvan-ad">Hayvanın Adı:</label>
        <input type="text" id="hayvan_ad" name="hayvan_ad">


        <label for="Tur">Hayvanın Türü:</label>
        <select class="custom-select" id="Tur" name="tur" required>
            <option value="">Lütfen Hayvanınızıın Türünü Seçiniz</option>
        </select>
        <br>
        <br>

        <label for="cinsiyet">Cinsiyet:</label>
        <select class="custom-select"  id="cinsiyet"  name="cinsiyet" required>
            <option value="">Lütfen Hayvanın Cinsiyetini Seçin</option>
            <option value="0">Erkek</option>
            <option value="1">Dişi</option>
        </select>
        <br>
        <br>



        <label for="kayip_durumu">Kayıp & Bulanan Durumu:</label>
        <div class="kisirlik-secenekleri">
            <label>
                <input type="radio" name="kayip_durumu" value="1" required>
                Kayip
            </label>
            <label>
                <input type="radio" name="kayip_durumu" value="0" required>
                Bulunan
            </label>
        </div>
        <br>
        <br>

        <label for="sehir">Şehir:</label>
        <select class="custom-select" id="Iller" name="il_id" required>
            <option value="">Lütfen Bir İl Seçiniz</option>
        </select>

        <label for="ilce">İlçe:</label>
        <select class="custom-select" id="Ilceler" name="ilce" disabled="disabled" required>
            <option value="">Lütfen Önce bir İl seçiniz</option>
        </select>
        <br>
        <br>

        <label for="adres">Adres:</label>
        <textarea id="adres" name="adres" rows="4" cols="50" required></textarea>

        <label for="baslik">İlan Başlık:</label>
        <textarea id="baslik" name="baslik" rows="4" cols="50" required></textarea>

        <label for="adres">Açıklama:</label>
        <textarea id="aciklama" name="aciklama" rows="4" cols="50" required></textarea>

        <input type="submit" value="İlan Ver">
    </form>





@endsection


