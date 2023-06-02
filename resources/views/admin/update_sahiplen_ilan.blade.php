@extends('admin.layouts.admin_panel')
@section('title')
    İlan Detay
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>

@endsection
@section('content')
    <br><h2 style="text-align: center">Sahiplenme İlanları</h2><br>
    @if(session('basarili'))
        <div class="alert alert-success" id="success-alert" style="text-align: center">
            {{ session('basarili') }}
        </div>
        <script>
            setTimeout(function(){
                document.getElementById('success-alert').style.display = 'none';
            }, 1500);
        </script>
    @endif
    <br>
    <a href="{{ route('sahiplenme_ilanlari') }}">
        <button type="submit" class="btn btn-primary">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geri Dön</font></font>
        </button>
    </a>
    <h3 style="text-align: center">İlan id: {{ $data->id }}</h3><hr>


    <form action="{{ route('update_sahiplen_ilan_post', $data->id) }}" method="post">
        @csrf
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;" >
                <p>İlanın Varsayılan Başlığı: <h5>{{ $data->baslik }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="ilan_baslik">İlan Başlık: </label><br>
                <textarea id="ilan_baslik" name="ilan_baslik" rows="2" cols="50"></textarea>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;" >
                <p>Hayvanın Varsayılan Fotoğrafı: </p>
                <img src="/{{ $data->hayvan_image }}" width="150" height="150">
            </div>
            <div style="width: 50%;">
                <label for="hayvan_image">Hayvanın Fotoğrafı: </label><br>
                <input type="file" id="hayvan_image" name="hayvan_image" accept="image/*">
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Adı: <h5>{{ $data->hayvan_ad }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="hayvan_ad">Hayvanın Adı: </label><br>
                <input type="text" id="hayvan_ad" name="hayvan_ad">
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Türü: <h5>{{ $data->getTur->tur_ad }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="tur">Hayvanın Türü: </label><br>
                <select class="custom-select" id="Tur" name="tur">
                    <option value="">Lütfen Hayvanın Türünü Seçiniz</option>
                </select>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Cinsi: <h5>{{ $data->cins }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="cins">Hayvanın Cinsi: </label><br>
                <select class="custom-select" id="Cins" name="cins" disabled="disabled">
                    <option value="">Lütfen Hayvanın Cinsini Seçiniz</option>
                </select>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Cinsiyeti: <h5>{{ $data->cinsiyet==0 ? 'Erkek' : 'Dişi' }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="cinsiyet">Hayvanın Cinsiyet: </label>
                <div>
                    <label>
                        <input type="radio" name="cinsiyet" value="0">Erkek
                    </label><br>
                    <label>
                        <input type="radio" name="cinsiyet" value="1">Dişi
                    </label>
                </div>

            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Yaşı: <h5>{{ $data->yas }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="yas">Hayvanın Yaşı: </label><br>
                <input type="number" id="yas" name="yas" min="0" max="30">
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Kısırlık Durumu: <h5>{{ $data->kisir==1 ? 'Kısır' : 'Kısır Değil' }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="kisirlik_durumu">Hayvanın Kısırlık Durumu: </label>
                <div>
                    <label>
                        <input type="radio" name="kisirlik_durumu" value="1">Kısırlaştırılmış
                    </label><br>
                    <label>
                        <input type="radio" name="kisirlik_durumu" value="0">Kısırlaştırılmamış
                    </label>
                </div>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Aşıları: <h5>{{ $data->kuduz==1 ? 'Kuduz': '' }}, {{ $data->karma==1 ? 'Karma' :'' }}, {{ $data->parazit==1 ? 'Parazit' : '' }}, {{ $data->kalp_kurtlari==1 ? 'Kalp Kurtları' : '' }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="asi_durumu">Aşı Durumu: </label>
                <div>
                    <input type="checkbox" id="kuduz" name="kuduz" value="1">
                    <label for="asi1">Kuduz</label><br>
                    <input type="checkbox" id="karma" name="karma" value="1">
                    <label for="asi2">Karma</label><br>
                    <input type="checkbox" id="parazit" name="parazit" value="1">
                    <label for="asi3">Parazit</label><br>
                    <input type="checkbox" id="kalp_kurtlari" name="kalp_kurtlari" value="1">
                    <label for="asi3">Kalp Kurtları</label>
                </div>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Çip Nosu: <h5>{{ $data->cip_no }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="cip">Çip Numarası: </label><br>
                <input type="text" id="cip" name="cip">
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Adresi(İl): <h5>{{ $data->getIL->title }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="il">İl: </label><br>
                <select class="custom-select" id="Iller" name="il_id">
                    <option value="">Lütfen Bir İl Seçin</option>
                </select>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Adresi(İlçe): <h5>{{ $data->ilce }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="ilce">İlçe: </label><br>
                <select class="custom-select" id="Ilceler" name="ilce" disabled="disabled">
                    <option value="">Lütfen bir İlçe seçin</option>
                </select>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Hayvanın Varsayılan Adresi(Açık Adres): <h5>{{ $data->adres }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="adres">Adres:</label><br>
                <textarea id="adres" name="adres" rows="2" cols="50"></textarea>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>İlanın Varsayılan Açıklaması: <h5>{{ $data->aciklama }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="aciklama">İlanın Açıklaması: </label><br>
                <textarea id="aciklama" name="aciklama" rows="4" cols="50"></textarea>
            </div>
        </div>
        <hr>
        <br>
        <div style="display: flex; justify-content: center;">
            <button type="submit" onclick="return confirm('iLAN BİLGİLERİNİ GÜNCELLEMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-success">
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Güncelle</font></font>
            </button>
        </div>
        <br><br><br>
    </form>
@endsection
