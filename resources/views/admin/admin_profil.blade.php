@extends('admin.layouts.admin_panel')
@section('title')
    Home
@endsection
@section('css_js')
    <style>
        .card {
            background-color: #f0f0f0;
            width: 75%;
            margin: 10% auto;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .username {
            text-align: center;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .circle-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
        }

        .split {
            display: flex;
        }

        .left {
            flex: 1;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right {
            flex: 1;
            text-align: center;
        }

        .text{
            margin-bottom: 5px;
        }
        .text span {
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <div class="username"><h3>{{ $data->username }}</h3></div>
        <div class="split">
            <div class="left">
                <div class="circle-image">
                    <img src="{{ $data->user_image }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="right">
                <div class="text">ADI: <span>{{ $data->name }}</span></div>
                <div class="text">SOYADI: <span>{{ $data->surname }}</span></div>
                <div class="text">E-MAİL: <span>{{ $data->email }}</span></div>
                <div class="text">TEL: <span>{{ $data->tel }}</span></div>
            </div>
        </div>
    </div>
@endsection
