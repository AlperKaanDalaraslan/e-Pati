@extends('admin.layouts.admin_panel')
@section('title')
    Home
@endsection
@section('css_js')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('content')
    <br><h2 style="text-align: center">Home</h2><br>
    <style>
        .card {
            background-color: #fff;
            background-repeat: no-repeat;
            background-size: cover;
            filter: grayscale(100%);
            width: 300px;
            height: 300px;
            cursor: pointer;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="{{ route('haberler') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/haber.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center text-white" style="font-weight: bold;">Yayındaki Haberlerin Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #ffffff;" data-count="{{ $haber_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('veteriner_sertifika_onay') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/sertifika.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center" style="font-weight: bold;">Onaylanmayı Bekleyen Veteriner Sertifika Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #000000;" data-count="{{ $sertifika_onay_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('sahiplenme_ilanlari') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/sahiplen.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center text-white" style="font-weight: bold;">Yayındaki Sahiplenme İlan Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #ffffff;" data-count="{{ $sahiplen_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('kayip_ilanlari') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/kayip.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center" style="font-weight: bold;">Yayındaki Kayıp İlan Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #000000;" data-count="{{ $kayip_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="{{ route('es_bulma_ilanlari') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/es_bulma.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center text-white" style="font-weight: bold;">Yayındaki Eş Bulma İlan Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #ffffff;" data-count="{{ $es_bulma_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('raporlar') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/rapor.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center" style="font-weight: bold;">Raporlanan İlan Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #000000;" data-count="{{ $rapor_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('kullanicilar') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/kullanici.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center text-white" style="font-weight: bold;">Kullanıcı Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #ffffff;" data-count="{{ $kullanici_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('veterinerler') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/veteriner.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center" style="font-weight: bold;">Veteriner Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #000000;" data-count="{{ $veteriner_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="{{ route('yoneticiler') }}" style="text-decoration: none;">
                    <div class="card" style="background-image: url('admin_home_images/yonetici.jpg');">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="card-title text-center text-white" style="font-weight: bold;">Yönetici Sayısı</h4>
                            <span class="count" style="font-size: 100px; font-weight: bold; color: #ffffff;" data-count="{{ $yonetici_count }}">0</span>
                        </div>
                    </div>
                </a>
            </div>
        </div><br>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).data('count')
            }, {
                duration: 3000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
@endsection
