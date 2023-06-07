@extends('layouts.app')
@section('title')
    Hayvan İlan Formu
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
        .düzenle{
            display: flex;
        }
        .form-bolumu2{
            float: left;
            font-family: "Microsoft PhagsPa";
            overflow: hidden;
        }
        .form-bolumu{
            float: right;
        }
        .image_düzenle{
            width: 400px;
            height: 250px;
            display: flex;
            justify-content: center;
        }
        .baslik_düzenle{
            padding: 10px;

        }
        .icerik{
            font-weight: bold;
            font-size: 17px
        }
    </style>
@endsection
@section('content')
    <div class="giris_navbar">
        <b class="baslik">Kayıp İlanını Düzenle</b>
    </div>
    <div class="düzenle">
        <form class="form-bolumu2 form-bolumu" style="max-width: 450px">
            <div class="image_düzenle">
                <img src="{{$data->hayvan_image}}" style="width: 200px; height: 200px; border-radius: 50%">

            </div>
            <span class="baslik_düzenle" ><span class="icerik" >İlan Başlık: </span>{{$data->baslik}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">İlan açıklama: </span>{{$data->aciklama}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">İl: </span>{{$data->getIl->title}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">İlçe: </span>{{$data->ilce}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">Hayvan adı: </span>{{$data->hayvan_ad}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">Kayıp Durumu: </span>{{$data->kayip_durumu == 1 ? 'Kayıp':'Bulunan'}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">Hayvanın türü: </span>{{$data->getTur->tur_ad}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">Hayvanın Cinsiyeti: </span>{{$data->cinsiyet == 1 ? 'Dişi' : 'Erkek'}}</span>
            <br>
            <br>
            <span class="baslik_düzenle" ><span class="icerik">İlan adres: </span>{{$data->adres}}</span>

        </form>
        <form action="{{route('update_kayip',$data->id)}}" method="post" class="form-bolumu" enctype="multipart/form-data">
            @csrf
            <label for="foto">Hayvanın Fotoğrafı:</label>
            <input type="file" id="hayvan_foto" name="hayvan_foto" accept="image/*" >
            <br>
            <br>
            <br>
            <label for="hayvan-ad">Hayvanın Adı:</label>
            <input type="text" id="hayvan_ad" name="hayvan_ad">


            <label for="Tur">Hayvanın Türü:</label>
            <select class="custom-select" id="Tur" name="tur" >
                <option value="">Lütfen Hayvanınızıın Türünü Seçiniz</option>
            </select>
            <br>
            <br>

            <label for="cinsiyet">Cinsiyet:</label>
            <select class="custom-select"  id="cinsiyet"  name="cinsiyet" >
                <option value="">Lütfen Hayvanın Cinsiyetini Seçin</option>
                <option value="0">Erkek</option>
                <option value="1">Dişi</option>
            </select>
            <br>
            <br>



            <label for="kayip_durumu">Kayıp & Bulanan Durumu:</label>
            <div class="kisirlik-secenekleri">
                <label>
                    <input type="radio" name="kayip_durumu" value="1" >
                    Kayip
                </label>
                <label>
                    <input type="radio" name="kayip_durumu" value="0" >
                    Bulunan
                </label>
            </div>
            <br>
            <br>

            <label for="sehir">Şehir:</label>
            <select class="custom-select" id="Iller" name="il_id" >
                <option value="">Lütfen Bir İl Seçiniz</option>
            </select>

            <label for="ilce">İlçe:</label>
            <select class="custom-select" id="Ilceler" name="ilce" disabled="disabled" >
                <option value="">Lütfen Önce bir İl seçiniz</option>
            </select>
            <br>
            <br>

            <label for="adres">Adres:</label>
            <textarea id="adres" name="adres" rows="4" cols="50" ></textarea>

            <label for="baslik">İlan Başlık:</label>
            <textarea id="baslik" name="baslik" rows="4" cols="50" ></textarea>

            <label for="adres">Açıklama:</label>
            <textarea id="aciklama" name="aciklama" rows="4" cols="50" ></textarea>

            <input type="submit" value="İlan Ver">
        </form>
    </div>
@endsection


