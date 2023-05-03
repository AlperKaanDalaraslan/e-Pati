@extends('layouts.app')
@section('title')
Hayvan İlan Formu
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/sahiplendir_ilan_form.css" rel="stylesheet" >
@endsection
@section('content')
    <div class="giris_navbar">
        <!--    <a href="javascript:history.back()"><b>&#129040; Geri</b></a>    içindeki js kodu bi önceki sayfaya dönmesi için   -->
      <b class="baslik">Sahiplendirme İçin İlan Ver</b>
    </div>
<form>
        @csrf
        <label for="foto">Hayvanın Fotoğrafı:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>
        <br>
		<label for="hayvan-ad">Hayvanın Adı:</label>
		<input type="text" id="hayvan-ad" name="hayvan-ad" required>

        <label for="Tur">Hayvanın Türü:</label>
        <select class="custom-select" id="Turler" required>
            <option value="">Lütfen Hayvanınızıın Türünü Seçiniz</option>
     </select>

		<label for="Cins">Hayvanınızın Cinsi:</label>
		<select class="custom-select" id="Cinsler" disabled="disabled" required>
                <option value="">Lütfen Önce bir İl seçiniz</option>
        </select>

		<label for="cinsiyet">Cinsiyet:</label>
		<select class="custom-select"  id="" required>
            <option value="">Lütfen Hayvanın Cinsiyetini Seçin</option>
            <option value="1">Erkek</option>
            <option value="2">Dişi</option>
        </select>

		<label for="yas">Yaşı:</label>
		<input type="number" id="yas" name="yas" min="0" max="30" required>

		<label for="kisirlık_durumu">Kısırlık Durumu:</label>
<div class="kisirlik-secenekleri">
  <label>
    <input type="radio" name="kisirlık_durumu" value="kısırlaştırılmış" required>
    Kısırlaştırılmış
  </label>
  <label>
    <input type="radio" name="kisirlık_durumu" value="kısırlaştırılmamış" required>
    Kısırlaştırılmamış
  </label>
</div>
    <label for="asi_durumu">Aşı Durumu:</label>
    <div class="asi-secenekleri">


        <label for="asi1">Kuduz</label>
		<input type="checkbox" id="asi1" name="asi1" value="kuduz">
		<label for="asi2">Karma</label>
		<input type="checkbox" id="asi2" name="asi2" value="karma">
        <label for="asi3">Parazit</label>
		<input type="checkbox" id="asi3" name="asi3" value="Parazit">
        <label for="asi3">Kalp Kurtları</label>
		<input type="checkbox" id="asi4" name="asi4" value="Kalp_Kurtlari">

    </div>
		<label for="chip">Çip Numarası:</label>
		<input type="text" id="chip" name="chip" required>

		<label for="sehir">Şehir:</label>
		<select class="custom-select" id="Iller" required>
            <option value="">Lütfen Bir İl Seçiniz</option>
     </select>

		<label for="ilce">İlçe:</label>
		<select class="custom-select" id="Ilceler" disabled="disabled" required>
                <option value="">Lütfen Önce bir İl seçiniz</option>
        </select>

		<label for="adres">Adres:</label>
		<textarea id="adres" name="adres" rows="4" cols="50" required></textarea>

		<input type="submit" value="İlan Ver">
</form>





@endsection


