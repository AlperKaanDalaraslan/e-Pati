<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Es_bul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EsBulmaController extends Controller
{
    public function index(){
        $data = Es_bul::paginate(5);
        return view('es_bulma_sayfasi', compact('data'));
    }

    public function show($id){
        $data = Es_bul::find($id);
        return view('es_bulma_hayvan', compact('data'));
    }

    public function create(Request $request){
        $request->validate([
            'hayvan_image'=>'required',
            'hayvan_ad'=>'required',
            'tur'=>'required',
            'cins'=>'required',
            'cinsiyet'=>'required',
            'yas'=>'required',
            'kisirlik_durumu'=>'required',
            'il_id'=>'required',
            'ilce'=>'required',
            'adres'=>'required',
            'aciklama'=>'required',
        ]);


        $data = new Es_bul();

        if($request->hasFile('hayvan_image')){
            $imageName=str::slug($request->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();
            $request->hayvan_image->move(public_path('es_bulma_images'), $imageName);
            $data->hayvan_image = 'es_bulma_images/'.$imageName;
        }

        $data->user_id = Auth::id();
        $data->hayvan_ad = $request->hayvan_ad;
        $data->tur = $request->tur;
        $data->cins = $request->cins;
        $data->cinsiyet = $request->cinsiyet;
        $data->yas = $request->yas;
        $data->kisirlik_durumu = $request->kisirlik_durumu;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->adres = $request->adres;
        $data->aciklama = $request->aciklama;

        $data->save();

        return redirect()->route('es_ilan_form');
    }
    public function esbulma_kriter_fonksiyonu(Request $request)
    {
        $request->validate([
            'tur' => 'required',
            'cinsiyet' => 'required',
            'il_id' => 'required',
            ]);

        $kriter1=$request->input('il_id');
        $kriter2=$request->input('cinsiyet');
        $kriter3=$request->input('tur');

        $veritabanindan_gelen = Es_bul::where('il_id', $kriter1)
                                        ->where('cinsiyet', $kriter2)
                                        ->where('tur', $kriter3)
                                        ->get();

        return view('esbulma_siralama' , compact('veritabanindan_gelen'));
    }
}
