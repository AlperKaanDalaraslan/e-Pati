@extends('layouts.vet_app')
@section('title')
    PROFİL
@endsection
@section('css_js')
    <link href="/css/calisma_form.css" rel="stylesheet" >
@endsection
@section('content')

        <style>

        </style>

    <body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red; font-weight: bold; text-align: center; padding-top: 20px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-container">

        <h1>Çalışma Saatleri</h1>

        <form method="GET" action="{{route('Vet_calisma_form_post')}}">
            <ul>
                <li>
                    <select id="" name="randevu_aralik" class="time-select" required>
                        <option value="">Lütfen randevular arası ne kadar süreceğini seç</option>
                        @foreach ($randevu_aralik as $randevu_arlk)
                            <option value="{{ $randevu_arlk }}">{{ $randevu_arlk }}</option>
                        @endforeach
                    </select>
                    @foreach ($gunler as $index => $gun)
                        <label for="{{ strtolower($gun) }}">{{ $gun }}:</label>
                        <input type="checkbox" id="{{ strtolower($gun) }}" name="day[]" value="{{ $gun_no[$index] }}">
                        <select id="{{ strtolower($gun) }}-start" name="{{ $gun_no[$index] }}-start" class="time-select" disabled required>
                            <option value="">Lütfen randevu başlangıç saatini seç</option>
                            @foreach ($bas_saat as $randevu_bas)
                                <option value="{{ $randevu_bas }}">{{ $randevu_bas }}</option>
                            @endforeach
                        </select>
                        <select id="{{ strtolower($gun) }}-end" name="{{ $gun_no[$index]}}-end" class="time-select" disabled required>
                            <option value="">Lütfen randevu bitiş saatini seç</option>
                            @foreach ($bas_saat as $randevu_bas)
                                <option value="{{ $randevu_bas }}">{{ $randevu_bas }}</option>
                            @endforeach

                        </select>
                    @endforeach
                    <script src="/js/vet_calisma.js"></script>
                </li>
            </ul>
            <button type="submit">Kaydet</button>
        </form>
    </div>
    </body>

@endsection
