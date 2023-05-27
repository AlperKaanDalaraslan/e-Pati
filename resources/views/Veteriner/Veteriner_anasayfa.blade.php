@extends('layouts.vet_app')
@section('title')
    Veteriner Anasayfa
@endsection
@section('css_js')
    <link rel="stylesheet" href="/css/veteriner_anasayfa.css">
@endsection
@section('content')

<div class="randevu-listesi">
    <div class="scrollable">
        <table>
            <thead>
            <tr>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Email</th>
                <th>Randevu nedeni</th>
                <th>Randevu Tarihi</th>
                <th>Randevu Saati</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <!-- Randevu kayıtlarını burada listele -->
            <tr>
                <td>Alper Kaan</td>
                <td>Dalarslan</td>

                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            <tr>
                <td>Jane</td>
                <td>Smith</td>
                <td>jane@example.com</td>
                <td>Kısırlık</td>
                <td>18.02.2023</td>
                <td>18.15</td>
                <td class="islem-buttons">
                    <button class="incele">İncele</button>
                    <button class="onayla">Onayla</button>
                    <button class="sil">Sil</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection


