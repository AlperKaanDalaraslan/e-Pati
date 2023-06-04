@extends('layouts.vet_app')
@section('title')
    Veteriner Anasayfa
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/veteriner_anasayfa.css">
    <style>
        .gecmis-randevu-bold {
            font-weight: bold;
        }

        .gecmis-randevu-bold::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: blue;
            margin-top: 10px; /* İsteğe bağlı olarak çizginin üst boşluğunu ayarlayabilirsiniz */
        }
    </style>
@endsection
@section('content')
    <div class="randevu-listesi">
        <h1 style="color: red">Geçmiş Randevular</h1>
        @if($gecmisRandevu && count($gecmisRandevu) > 0)
            <div class="scrollable">
                <table>
                    <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Randevu Tarihi</th>
                        <th>Randevu Saati</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Randevu kayıtlarını burada listele -->

                    @foreach($gecmisRandevu as $randevu)
                        <tr>
                            <td>{{$randevu->getUser->name}}</td>
                            <td>{{$randevu->getUser->surname}}</td>
                            <td>{{$randevu->getUser->email}}</td>
                            <td>{{$randevu->getUser->tel}}</td>
                            <td>{{$randevu->randevu_tarih}}</td>
                            <td>{{$randevu->randevu_saat}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <h1>Geçmiş Randevunuz bulunmamaktadır!!</h1>
                @endif
            </div>
    </div>


@endsection
