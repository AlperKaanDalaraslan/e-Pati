@extends('admin.layouts.admin_panel')
@section('title')
    Home
@endsection
@section('content')
    <br><h2 style="text-align: center">Veteriner Sertifika Onay</h2><br>
    <div class="table-responsive">
        {{ $onay_veteriner->links('pagination::bootstrap-4') }}
        <table class="table table-striped table-sm" style="margin-top: 50px">
            <thead>
            <tr>
                <th scope="col">Sertifikalar</th>
                <th scope="col">Klinik Ad</th>
                <th scope="col">Telefon</th>
                <th scope="col">Gmail</th>
                <th scope="col">Onayla</th>
                <th scope="col">Reddet</th>
            </tr>
            </thead>
            @if($onay_veteriner && count($onay_veteriner) > 0)

                <tbody>

                @foreach($onay_veteriner as $vet)
                    <tr>
                        <td><a href="{{$vet->sertifika_img}}" style="text-decoration: #1a1e21">sertifakayı goruntule</a></td>
                        <td>{{$vet->getVeteriner->klinik_ad}}</td>
                        <td>{{$vet->getVeteriner->getUser->tel}}</td>
                        <td>{{$vet->getVeteriner->getUser->email}}</td>
                        <td><a href="{{route('VetOnay',[$vet->vet_id])}}"><button type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Onayla</font></font></button></a></td>
                        <td><a href="{{route('VetRed',[$vet->vet_id])}}"><button type="button" class="btn btn-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reddet</font></font></button></a></td>
                    </tr>
                @endforeach
                </tbody>
        </table>
        @else
            <h3 style="margin-top: 90px; color: #41464b; position: absolute;text-align: center;"> Başvuru Bulunmamaktadır</h3>
    </div>
    @endif
@endsection
