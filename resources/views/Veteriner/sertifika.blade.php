<html>
<head>
    <title>
        Veteriner Doğrulama
    </title>
    <link href="/css/sahiplendir_ilan_form.css" rel="stylesheet" >
</head>
@if($kontrol)
    <div class="form-bolumu">
        <h1 style="text-align: center"> Veteriner Hesabınız Onay Aşamasındadır!!</h1>
        <h3 style="text-align: center"> Onay Durumu: <span style="color: #ffc107"> Bekleniyor</span></h3>
    </div>
@else
<form action="{{route('sertifika_post')}}" method="post" class="form-bolumu" enctype="multipart/form-data">
    @csrf
    <label for="foto">Lütfen Veteriner Olduğunuzu Doğrulamak için sertikanızı yükleyiniz:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <input type="submit" value="Gönder">
</form>
@endif
</html>
