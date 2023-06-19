@extends('admin.layouts.admin_panel')
@section('title')
    Raporlar
@endsection
@section('content')
    <br><h2 style="text-align: center">Raporlar</h2><br>
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
                <th scope="col">Rapor ID</th>
                <th scope="col">Raporlayan Kullanıcı ID</th>
                <th scope="col">Raporlanan İlanın Kategorisi ve ID'si</th>
                <th scope="col">Rapor Nedeni</th>
                <th scope="col">Oluşturma Tarihi</th>
                <th scope="col">Güncelleme Tarihi</th>
                <th scope="col">Raporu Sil</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>{{ $dat->raporlayan_id }}</td>
                    <td>@if($dat->ilan_tur == 1)
                            Sahiplenme ilanı, id= {{$dat->ilan_id}}
                        @elseif($dat->ilan_tur == 2)
                            Kayıp ilanı, id= {{$dat->ilan_id}}
                        @elseif($dat->ilan_tur == 3)
                            Es bulma ilanı, id= {{$dat->ilan_id}}
                        @endif
                    </td>
                    <td>{{ $dat->rapor_nedeni }}</td>
                    <td>{{ $dat->created_at }}</td>
                    <td>{{ $dat->updated_at }}</td>
                    <td>
                        <form action="{{ route('delete_rapor', $dat->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('BU RAPORU SİLMEK İSTEDİĞİNİZDEN EMİN MİSİNİZ?')" class="btn btn-danger">
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
