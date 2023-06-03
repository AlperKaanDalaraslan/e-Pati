@extends('admin.layouts.admin_panel')
@section('title')
    Create Haber
@endsection
@section('content')
    <br><h2 style="text-align: center">Haber Oluştur</h2><br>
    <a href="{{ route('haberler') }}">
        <button type="submit" class="btn btn-primary">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geri Dön</font></font>
        </button>
    </a><br>
    <form action="{{ route('create_haber_post') }}" method="post">
        @csrf
        <br>
        <div style="display: flex; flex-direction: column; align-items: center;">
            <label for="haber_image">Haberin Fotoğrafı: </label>
            <input type="file" id="haber_image" name="haber_image" accept="image/*" required><br><br><br>

            <label for="haber_baslik">Haberin Başlığı: </label>
            <textarea id="haber_baslik" name="haber_baslik" rows="2" cols="50" required></textarea><br><br><br>

            <label for="haber_icerik">Haberin Açıklaması:</label>
            <textarea id="haber_icerik" name="haber_icerik" rows="4" cols="50" required></textarea><br><br>
        </div>
        <div style="display: flex; justify-content: center;">
            <button type="submit" onclick="return confirm('HABER OLUŞTURMAK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-success">
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oluştur</font></font>
            </button>
        </div>
        <br><br><br>
    </form>
@endsection
