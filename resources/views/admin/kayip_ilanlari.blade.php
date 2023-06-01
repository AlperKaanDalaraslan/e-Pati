@extends('admin.layouts.admin_panel')
@section('title')
    Kayip İlanları
@endsection
@section('content')
    <br><h2 style="text-align: center">Kayıp İlanları</h2><br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Hayvan id</th>
                <th scope="col">Kullanıcı id</th>
                <th scope="col">İlan başlık</th>
                <th scope="col">Hayvan image</th>
                <th scope="col">Hayvan ad</th>
                <th scope="col">Hayvan tür</th>
                <th scope="col">Hayvan cins</th>
                <th scope="col">Hayvan cinsiyet</th>
                <th scope="col">Hayvan yaş</th>
                <th scope="col">Kısırlık Durumu</th>
                <th scope="col">Aşı durumu</th>
                <th scope="col">Hayvan cip no</th>
                <th scope="col">Hayvan Adres</th>
                <th scope="col">İlan açıklama</th>
                <th scope="col">Oluşturma tarihi</th>
                <th scope="col">Güncelleme tarihi</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>{{ $dat->user_id }}</td>
                    <td>{{ $dat->baslik }}</td>
                    <td><img src="/{{ $dat->hayvan_image }}"></td>
                    <td>{{ $dat->hayvan_ad }}</td>
                    <td>{{ $dat->tur }}</td>
                    <td>{{ $dat->cins }}</td>
                    <td>{{ $dat->cinsiyet==1 ? 'Erkek' : 'Dişi' }}</td>
                    <td>{{ $dat->yas }}</td>
                    <td>{{ $dat->kisir==1 ? 'Kısır' : 'Kısır değil' }}</td>
                    <td>{{ $dat->kuduz==1 ? 'Kuduz': '' }}, {{ $dat->karma==1 ? 'Karma' :'' }}, {{ $dat->parazit==1 ? 'Parazit' : '' }}, {{ $dat->kalp_kurtlari==1 ? 'Kalp Kurtları' : '' }}</td>
                    <td>{{ $dat->cip_no }}</td>
                    <td>{{ $dat->il_id }}, {{ $dat->ilce }}, {{$dat->adres}}</td>
                    <td>{{ $dat->aciklama }}</td>
                    <td>{{ $dat->created_at }}</td>
                    <td>{{ $dat->updated_at }}</td>
                    <td><a href="{{ route('ilan_detay', $dat->id) }}"><button type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Düzenle</font></font></button></a></td>
                    <td><button type="button" class="btn btn-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sil</font></font></button></td>
                </tr>
                </tbody>
            @endforeach
        </table>
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
@endsection