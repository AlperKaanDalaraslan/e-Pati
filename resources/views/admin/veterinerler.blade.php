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
                <th scope="col">Kullanıcı ID</th>
                <th scope="col">Kullanıcı Statü</th>
                <th scope="col">Kullanıcının Kullanıcı Adı</th>
                <th scope="col">Kullanıcı Resim</th>
                <th scope="col">Kullanıcı Ad</th>
                <th scope="col">Kullanıcı Soyad</th>
                <th scope="col">Kullanıcı E-mail</th>
                <th scope="col">Kullanıcı Tel</th>
                <th scope="col">Sertifika Onay Durumu</th>
                <th scope="col">Uzmanlık Alanı</th>
                <th scope="col">Çalıştığı Gün ve saatler</th>
                <th scope="col">Çalıştığı Klinik Ad</th>
                <th scope="col">Çalıştığı Klinik Adres</th>
                <th scope="col">Kayıt Tarihi</th>
                <th scope="col">Profil Güncelleme Tarihi</th>
                <th scope="col">Veteriner Sil</th>
            </tr>
            </thead>
            @foreach($data as $dat)
                <tbody>
                <tr>
                    <td>{{ $dat->id }}</td>
                    <td>
                        <button type="button" onclick="showOptions('{{ $dat->id }}')" class="btn btn-warning">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veteriner</font></font>
                        </button>

                        <div id="options-{{ $dat->id }}" style="display: none;">
                            <ul>
                                <li><a href="{{ route('update_status', ['id' => $dat->id, 'status' => 0]) }}" style="text-decoration: none; color: black;">Yönetici</a></li>
                                <li><a href="{{ route('update_status', ['id' => $dat->id, 'status' => 1]) }}" style="text-decoration: none; color: black;">Kullanıcı</a></li>
                            </ul>
                        </div>

                        <script>
                            function showOptions(id) {
                                var optionsDiv = document.getElementById('options-' + id);
                                var button = event.target;

                                if (optionsDiv.style.display === 'none') {
                                    optionsDiv.style.display = 'block';
                                    document.addEventListener('click', outsideClickHandler);
                                } else {
                                    optionsDiv.style.display = 'none';
                                    document.removeEventListener('click', outsideClickHandler);
                                }

                                function outsideClickHandler(event) {
                                    if (!optionsDiv.contains(event.target) && event.target !== button) {
                                        optionsDiv.style.display = 'none';
                                        document.removeEventListener('click', outsideClickHandler);
                                    }
                                }
                            }
                        </script>
                    </td>
                    <td>{{ $dat->username }}</td>
                    <td><img src="{{ $dat->user_image }}" width="100" height="100"></td>
                    <td>{{ $dat->name }}</td>
                    <td>{{ $dat->surname }}</td>
                    <td>{{ $dat->email }}</td>
                    <td>{{ $dat->tel }}</td>
                    <td>{{ $dat->onay==1 ? 'Onaylandı' : 'Onaylanmadı' }}</td>
                    <td>{{ $dat->cerrahi ? 'Cerrahi, ' : ''}}{{ $dat->teshis ? 'Teşhis, ' : ''}}{{ $dat->kuafor ? 'Kuafor, ' : ''}}{{ $dat->dahiliye ? 'Dahiliye, ' : ''}}{{ $dat->lab ? 'Lab, ' : ''}}{{ $dat->muayene ? 'Muayene, ' : ''}}{{ $dat->koruyucu_hekim ? 'Koruyucu Hekim, ' : ''}}{{ $dat->rontgen ? 'Röntgen, ' : ''}}{{ $dat->yogun_bakim ? 'Yoğun Bakım' : ''}}</td>
                    <td>
                        @if($dat->gun==1)
                            Pazartesi ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==2)
                            Salı ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==3)
                            Çarşamba ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==4)
                            Perşembe ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==5)
                            Cuma ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==6)
                            Cumartesi ({{$dat->randevu_bas}}-{{$dat->randevu_bit}}),
                        @elseif($dat->gun==7)
                            Pazar ({{$dat->randevu_bas}}-{{$dat->randevu_bit}})
                        @endif
                    </td>
                    <td>{{ $dat->klinik_ad }}</td>
                    <td>{{ $dat->il_id }}, {{ $dat->ilce }}, {{ $dat->adres }}</td>
                    <td>{{ $dat->created_at }}</td>
                    <td>{{ $dat->updated_at }}</td>
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
