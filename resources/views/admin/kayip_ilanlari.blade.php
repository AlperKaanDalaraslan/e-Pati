@extends('admin.layouts.admin_panel')
@section('title')
    Kayip İlanları
@endsection
@section('content')
    <br><h2 style="text-align: center">Kayıp İlanları</h2><br>
    @if( session('basarili') )
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
        {{ $data->links('pagination::bootstrap-4') }}
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Hayvan id</th>
                <th scope="col">Kullanıcı id</th>
                <th scope="col">Kayıp Durumu</th>
                <th scope="col">İlan başlık</th>
                <th scope="col">Hayvan image</th>
                <th scope="col">Hayvan ad</th>
                <th scope="col">Hayvan tür</th>
                <th scope="col">Hayvan cins</th>
                <th scope="col">Hayvan cinsiyet</th>
                <th scope="col">Hayvan yaş</th>
                <th scope="col">Hayvan Adres</th>
                <th scope="col">İlan açıklama</th>
                <th scope="col">Oluşturma tarihi</th>
                <th scope="col">Güncelleme tarihi</th>
                <th scope="col">İlanı Güncelle</th>
                <th scope="col">İlanı Sil</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>{{ $dat->user_id }}</td>
                    <td>{{ $dat->kayip_durumu==1 ? 'Kayıp' : 'Bulundu' }}</td>
                    <td>{{ $dat->baslik }}</td>
                    <td><img src="/{{ $dat->hayvan_image }}" width="100" height="100"></td>
                    <td>{{ $dat->hayvan_ad }}</td>
                    <td>{{ $dat->getTur->tur_ad }}</td>
                    <td>{{ $dat->cins }}</td>
                    <td>{{ $dat->cinsiyet==1 ? 'Erkek' : 'Dişi' }}</td>
                    <td>{{ $dat->yas }}</td>
                    <td>{{ $dat->getIL->title }}, {{ $dat->ilce }}, {{$dat->adres}}</td>
                    <td>{{ $dat->aciklama }}</td>
                    <td>{{ $dat->created_date }}</td>
                    <td>{{ $dat->updated_date }}</td>
                    <td>
                        <form action="{{ route('update_kayip_ilan', $dat->id) }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-warning"><font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Güncelle</font></font>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('delete_kayip_ilan', $dat->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('BU İLANI SİLMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-danger">
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
