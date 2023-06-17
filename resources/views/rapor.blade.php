@extends('layouts.app')
@section('title')
    RAPORLA
@endsection
@section('css_js')
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 400px;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
@endsection
@section('content')
    <div class="form-container">
        <h1>Raporlama </h1>
        <form action="{{route('raporla_post', ['ilan_tur'=> $ilan_tur ,$id])}}" method="POST">
            @csrf
            <label for="rapor-nedeni">Raporlama Nedeni:</label>
            <textarea id="rapor-nedeni" name="rapor_nedeni" rows="5" placeholder="Raporlama nedenini buraya yazın"></textarea>
            <button type="submit">Gönder</button>
        </form>
    </div>
    </body>
@endsection
