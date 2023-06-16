@extends('admin.layouts.admin_panel')
@section('title')
    Haberler
@endsection
@section('content')
    <br><h1 style="text-align: center">Haberler</h1>
    <div style="text-align: center;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                {{ $data->links('pagination::bootstrap-4') }}
            </div>
            <div>
                <a href="{{ route('create_haber') }}">
                    <button type="submit" class="btn btn-success" style="font-size: 20px;">
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Haber Oluştur</font></font>
                    </button>
                </a>
            </div>
        </div>
    </div><br>
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
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Haber id</th>
                <th scope="col">Kullanıcı id</th>
                <th scope="col">Haber image</th>
                <th scope="col">Haber başlık</th>
                <th scope="col">Haber içerik</th>
                <th scope="col">Oluşturma tarihi</th>
                <th scope="col">Güncelleme tarihi</th>
                <th scope="col">Haberi Güncelle</th>
                <th scope="col">Haberi Sil</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>{{ $dat->user_id }}</td>
                    <td><img src="{{ $dat->haber_image }}" width="100" height="100"></td>
                    <td>{{ $dat->haber_baslik }}</td>
                    <td>{{ $dat->haber_icerik }}</td>
                    <td>{{ $dat->created_at }}</td>
                    <td>{{ $dat->updated_at }}</td>
                    <td>
                        <form action="{{ route('update_haber', $dat->id) }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-warning">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Güncelle</font></font>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('delete_haber', $dat->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('BU HABERİ SİLMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-danger">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sil</font></font>
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
