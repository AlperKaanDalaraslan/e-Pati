@extends('admin.layouts.admin_panel')
@section('title')
    Update Haber
@endsection
@section('content')
    <br><h2 style="text-align: center">Haber Güncelleme</h2><br>
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
    <a href="{{ route('haberler') }}">
        <button type="submit" class="btn btn-primary">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geri Dön</font></font>
        </button>
    </a>
    <h4 style="text-align: center">Haber id: {{ $data->id }}</h4><hr>


    <form action="{{ route('update_haber_post', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;" >
                <p>Haberin Varsayılan Fotoğrafı: </p>
                <img src="{{ $data->haber_image }}" width="150" height="150">
            </div>
            <div style="width: 50%;">
                <label for="haber_image">Haberin Fotoğrafı: </label><br>
                <input type="file" id="haber_image" name="haber_image" accept="image/*">
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;" >
                <p>Haberin Varsayılan Başlığı: <h5>{{ $data->haber_baslik }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="haber_baslik">Haberin Başlığı: </label><br>
                <textarea id="haber_baslik" name="haber_baslik" rows="2" cols="50"></textarea>
            </div>
        </div>
        <hr>
        <div style="display: flex; justify-content: center;">
            <div style="width: 50%;">
                <p>Haberin Varsayılan Açıklaması: <h5>{{ $data->haber_icerik }}</h5></p>
            </div>
            <div style="width: 50%;">
                <label for="haber_icerik">Haberin Açıklaması:</label><br>
                <textarea id="haber_icerik" name="haber_icerik" rows="4" cols="50"></textarea>
            </div>
        </div>
        <hr>
        <br>
        <div style="display: flex; justify-content: center;">
            <button type="submit" onclick="return confirm('HABERi GÜNCELLEMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-success">
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Güncelle</font></font>
            </button>
        </div>
        <br><br><br>
    </form>
@endsection
