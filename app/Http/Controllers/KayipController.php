<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sahiplen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KayipController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'hayvan_foto'=>'required',
            'baslik' => 'required',
            'tur'=>'required',
            'cinsiyet'=>'required',
            'kayip'=>'required',
            'bulunan'=>'required',
            'il_id'=>'required',
            'ilce'=>'required',
            'adres'=>'required',
            'aciklama'=>'required',

        ]);



        $data = new Kayip();
        $data->user_id = Auth::id();
        $data->tur = $request->tur;
        $data->cinsiyet = $request->cinsiyet;
        $data->kayip = $request->kayip;
        $data->bulunan = $request->bulunan;
        $data->cip_no = $request->cip;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->adres = $request->adres;
        $data->baslik = $request->baslik;
        $data->aciklama = $request->aciklama;


        $data->save();

        return redirect()->route('kayip_ilan_form');

    }
    public function index(){
        $data = Sahiplen::paginate(5);
        return view('kayip_ilan_sayfasi',compact('data'));

    }

    public function show($id){
        $data =Sahiplen::find($id);
        return view('kayip_hayvan',compact('data'));
    }

    }
    //
}
