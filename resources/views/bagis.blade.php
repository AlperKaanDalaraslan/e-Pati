@extends('layouts.app')
@section('title')
BAĞIŞ
@endsection
@section('css_js')
    <link href="/css/bagis.css" rel="stylesheet" >
@endsection
@section('content')
    <div class="card">
        <img src="/images/donate.jpg" alt="Hayvan Resmi">
        <div class="card-content">
            <h2>Hayvan Bağışı İçİn Destek Olun</h2>
            <p>Hayvanları korumak ve onlara daha iyi bir yaşam sunmak için sizin yardımınıza ihtiyacımız var. Bağışlarınızla hayvanların sağlık, barınma ve beslenme ihtiyaçları karşılanacak ve onlara sevgi dolu bir ortam sunulacaktır.</p>
            <p>Bağış yapmak için aşağıdaki IBAN numaralarından birine gönderim yapabilirsiniz:</p>
            <div class="iban-container">
                <p class="iban">IBAN: XXXX XXXX XXXX XXXX</p>
                <button class="copy-button" onclick="copyIBAN(this)">Kopyala</button>
            </div>
            <div class="iban-container">
                <p class="iban">IBAN: XXXX XXXX XXXX XXXX</p>
                <button class="copy-button" onclick="copyIBAN(this)">Kopyala</button>
            </div>
        </div>
    </div>


<script>
    function copyIBAN(button) {
        const ibanText = button.previousElementSibling.textContent;
        const textarea = document.createElement('textarea');
        textarea.value = ibanText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        alert('IBAN kopyalandı: ' + ibanText);
    }
</script>

@endsection
