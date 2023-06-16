@extends('admin.layouts.admin_panel')
@section('title')
    Veterinerler
@endsection
@section('content')
    <br><h2 style="text-align: center">Veterinerler</h2><br>
    @if(session('basarili'))
        <div class="alert alert-success" id="success-alert" style="text-align: center">
            {{ session('basarili') }}
        </div>
        <script>
            setTimeout(function(){
                document.getElementById('success-alert').style.display = 'none';
            }, 2000);
        </script>
    @endif
    <div class="table-responsive">
        {{ $data->links('pagination::bootstrap-4') }}
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Kullanıcı id</th>
                <th scope="col">Kullanıcı statü</th>
                <th scope="col">Kullanıcının kullanıcı adı</th>
                <th scope="col">Kullanıcı image</th>
                <th scope="col">Kullanıcı adı</th>
                <th scope="col">Kullanıcı soyadı</th>
                <th scope="col">Kullanıcı e-mail</th>
                <th scope="col">Kullanıcı tel</th>
                <th scope="col">Kullanıcı şifre</th>
                <th scope="col">Oluşturma tarihi</th>
                <th scope="col">Güncelleme tarihi</th>
                <th scope="col">Veteriner Bilgilerini Güncelle</th>
                <th scope="col">Veteriner Sil</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>
                        @if( $dat->status==0 )
                            Yönetici
                        @elseif( $dat->status==2 )
                            Veteriner
                        @else
                            Kullanıcı
                        @endif
                    </td>
                    <td>{{ $dat->username }}</td>
                    <td><img src="{{ $dat->user_image }}" width="100" height="100"></td>
                    <td>{{ $dat->name }}</td>
                    <td>{{ $dat->surname }}</td>
                    <td>{{ $dat->email }}</td>
                    <td>{{ $dat->tel }}</td>
                    <td>***********</td>
                    <td>{{ $dat->created_at }}</td>
                    <td>{{ $dat->updated_at }}</td>
                    <td>
                        <a href="#">
                            <button type="button" class="btn btn-warning">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Güncelle</font></font>
                            </button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('delete_veteriner', $dat->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('BU VETERİNERİ VE VETERİNER İLE İLGİLİ KAYITLARI SİLMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-danger">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sil</font></font></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
