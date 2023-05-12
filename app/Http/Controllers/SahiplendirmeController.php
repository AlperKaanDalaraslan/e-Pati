<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sahiplen;
use Illuminate\Support\Facades\Auth;

class SahiplendirmeController extends Controller
{
    public function create(Request $request){
        $data = new Sahiplen();
        $data->user_id = Auth::user()->getAuthIdentifier();
        $data->hayvan_ad = $request->hayvan_ad;
        $data->tur = $request->tur;
        $data->cins = $request->cins;
        $data->cinsiyet = $request->cinsiyet;
        $data->yas = $request->yas;
        $data->kisir = $request->kisir;
        $data->parazit = $request->parazit;
        $data->kuduz = $request->kuduz;
        $data->karma = $request->karma;
        $data->kalp_kurtlari = $request->kalp_kurtlari;
        $data->cip_no = $request->cip_no;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->adres = $request->adres;
        $data->aciklama = $request->aciklama;
        
        $data->hayvan_image = $request->hayvan_foto;

        return redirect()->route('anasayfa');

    }
}
