@extends('layouts.vet_app')
@section('title')
    Veteriner Anasayfa
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/veteriner_anasayfa.css">
    <style>
        .randevu-bold {
            font-weight: bold;
        }

        .randevu-bold::after {
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
        <h1 style="color: red">Onaylanacak Randevular</h1>
        @if($onaylanacakrandevular && count($onaylanacakrandevular) > 0)
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
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Randevu kayıtlarını burada listele -->

                    @foreach($onaylanacakrandevular as $randevu)
                        <tr>
                            <td>{{$randevu->getUser->name}}</td>
                            <td>{{$randevu->getUser->surname}}</td>

                            <td>{{$randevu->getUser->email}}</td>
                            <td>{{$randevu->getUser->tel}}</td>
                            <td>{{$randevu->randevu_tarih}}</td>
                            <td>{{$randevu->randevu_saat}}</td>
                            <td class="islem-buttons">
                                <button class="onayla" type="button" onclick="window.location.href = '{{ route('randevu_onayla', ['id' => $randevu->randevu_id]) }}';">Onayla</button>
                                <button class="sil" type="button" onclick="window.location.href = '{{ route('randevu_sil_vet', ['id' => $randevu->randevu_id]) }}';">Sil</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <h1>Onaylanacak Randevunuz bulunmamaktadır!!</h1>
                @endif
            </div>
    </div>
    <div class="randevu-listesi">
        <h1 style="color: greenyellow">Onaylanan Randevular</h1>
        @if($onaylananrandevular && count($onaylananrandevular) > 0)
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
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Randevu kayıtlarını burada listele -->

                    @foreach($onaylananrandevular as $randevu)
                        <tr>
                            <td>{{$randevu->getUser->name}}</td>
                            <td>{{$randevu->getUser->surname}}</td>

                            <td>{{$randevu->getUser->email}}</td>
                            <td>{{$randevu->getUser->tel}}</td>
                            <td>{{$randevu->randevu_tarih}}</td>
                            <td>{{$randevu->randevu_saat}}</td>
                            <td class="islem-buttons">
                                <button class="sil" type="button" onclick="window.location.href = '{{ route('randevu_sil_vet', ['id' => $randevu->randevu_id]) }}';">İptal et</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <h1>Onaylanan Randevunuz bulunmamaktadır!!</h1>
                @endif
            </div>
    </div>
@endsection
