@extends('layouts.app')
@section('title')
    Randevu
@endsection
@section('css_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/js/sahiplendirme_ilan_form.js"></script>
    <link href="/css/randevu.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection
@section('content')
    <div class="kullanici_profil_kart" >
        <div class="kullanici_profil_baslik" style="display: flex; justify-content: center; align-items: center; ">

            <b class="username_baslik">{{$vet->klinik_ad}}</b>
        </div>
        <div class="kullanici_profil_bilgi">

            <div class="profil-resim-div">
                <img src="{{ asset(Auth::user()->user_image ?: '/images/user_2.png' )}}" alt="" class="kullanici_profil_resim">

                <h3 class="baslik" style="text-align: center">Çalışma Günleri ve Saatleri</h3>
                <table class="tablo">


                        <tr>
                            <th class="baslik-hucre">Gün</th>
                            <th class="baslik-hucre">Başlangıç Saati</th>
                            <th class="baslik-hucre">Bitiş Saati</th>
                        </tr>
                    @foreach($gunler as $index => $gun)
                        @php
                            $veri = $data->where('gun', $index +1)->first();
                        @endphp
                        <tr>
                            @if(!empty($veri))
                                <td class="veri-hucre">{{ $gun }}</td>
                                <td class="veri-hucre">{{$veri->randevu_bas}} </td>
                                <td class="veri-hucre">{{$veri->randevu_bit}} </td>
                            @else
                                <td class="veri-hucre">{{ $gun }}</td>
                                <td class="veri-hucre"> - </td>
                                <td class="veri-hucre"> - </td>
                            @endif
                        </tr>
                    @endforeach

                </table>
                <h3 style="text-align: center">Uzmanlık Alanları</h3>

                <ul>
                    @foreach($uzmanlik_isim as $uzmanlik)
                        @if($uzmanliklar[$uzmanlik])
                            <li><span class="expertise">{{$uzmanlik}}</span>  </li>
                                <?php $i = 1?>
                        @endif

                    @endforeach
                </ul>
            </div>

            <div class="dropdown">
                <h2 class="calendar-header">{{$tarih}}</h2>
                <span type="text" style="" id="selectedDate"  readonly></span>
                <table class="calendar-table" id="calendar"></table>
                @if($calisma)

                <?php
                $bas_saat = strtotime($calisma->randevu_bas);
                $bit_saat = strtotime($calisma->randevu_bit);
                $dongu_saat = $bas_saat;
                $x = 0;
                ?>
                @while($bas_saat < $bit_saat)
                <button class="button" onclick="toggleDropdown(this)">{{date('H:i', $bas_saat)}}</button>
                <div class="dropdown-content" id="dropdown1">
                    @while($bas_saat < strtotime('+2 hours', $dongu_saat))
                        @if (isset($sonuc[$x]))
                            {!! $sonuc[$x] !!}
                                <?php $x++; ?>
                        @endif
                                <?php $bas_saat = strtotime('+' . $calisma->randevu_aralik . ' minutes', $bas_saat); ?>
                    @endwhile
                </div>

                <?php $bas_saat = $dongu_saat ;$bas_saat = strtotime('+2 hours', $bas_saat); $dongu_saat = $bas_saat; ?>
                @endwhile

                @else
                    <h1 style="color: red; text-align: center"> Bu güne uygun randevu bulunmamaktadır</h1>
                @endif
                
            </div>

        </div>

    </div>

    <script>
        function toggleDropdown(button) {
            var dropdown = button.nextElementSibling;
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                if (dropdowns[i] !== dropdown) {
                    dropdowns[i].style.display = "none";
                }
            }
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        }
        // Takvimi oluştur
        // Takvimi oluştur
        function createCalendar() {
            var calendar = document.getElementById("calendar");
            var today = new Date();
            var startDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
            var endDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 14);

            var table = document.createElement("table");
            var tbody = document.createElement("tbody");

            // Takvim satırlarını oluştur
            var row;
            var count = 0;

            for (var i = new Date(startDate); i <= endDate; i.setDate(i.getDate() + 1)) {
                if (count % 7 === 0) {
                    row = document.createElement("tr");
                    tbody.appendChild(row);
                }

                var cell = document.createElement("td");
                var cellText = document.createTextNode(i.toDateString());

                cell.appendChild(cellText);
                row.appendChild(cell);
                cell.classList.add("calendar-cell");
                // Seçili tarihi güncelle ve backend'e gönder
                cell.addEventListener("click", function() {
                    var selectedCells = document.getElementsByClassName("selected");
                    for (var k = 0; k < selectedCells.length; k++) {
                        selectedCells[k].classList.remove("selected");
                    }

                    this.classList.add("selected");
                    document.getElementById("selectedDate").value = this.innerText;

                    var vetId = {{$vet->vet_id}}; // Vet ID'sini güncelleyin
                    var selectedDate = this.innerText;
                    var url = '{{ route("randevu_alma", ["id" => $vet->id, "tarih" => ":selectedDate"]) }}'
                        .replace(':vet_id', vetId)
                        .replace(':selectedDate', selectedDate);

                    window.location.href = url; // Sayfayı istenen URL'ye yönlendir
                });

                count++;
            }

            table.appendChild(tbody);
            calendar.appendChild(table);
        }

        createCalendar();

    </script>
@endsection
