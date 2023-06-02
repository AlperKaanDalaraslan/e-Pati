@extends('admin.layouts.admin_panel')
@section('title')
    Home
@endsection
@section('content')
    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Sertifikalar</th>
                <th scope="col">Klinik Ad</th>
                <th scope="col">Telefon</th>
                <th scope="col">Gmail</th>
                <th scope="col">Onayla</th>
            </tr>
            </thead>
            <tbody>
            @foreach($onay_veteriner as $vet)
            <tr>
                <td><a href="@if($vet->sertifika_imq != 0 ){{$vet->sertifika_img}} @else {{asset('sertifika/sertifika_yoktur_img.png')}} @endif" style="text-decoration: #1a1e21">sertifakayı goruntule</a></td>
                <td>{{$vet->getVeteriner->klinik_ad}}</td>
                <td>{{$vet->getVeteriner->getUser->tel}}</td>
                <td>{{$vet->getVeteriner->getUser->email}}</td>
                @if($vet->getVeteriner->onay===0)
                    <td><a href="{{route('VetOnay',[$vet->vet_id])}}"><button type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Onayla</font></font></button></a></td>

                @else
                    <td><a href="{{route('VetOnay',[$vet->vet_id])}}"><button type="button" class="btn btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Onayla</font></font></button></a></td>

                @endif

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
