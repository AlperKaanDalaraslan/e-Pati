<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RaporController extends Controller
{
    public function form($ilan_tur,$id){
        $kontrol = Rapor::where('ilan_tur',$ilan_tur)
            ->where('ilan_id',$id)
            ->where('raporlayan_id',Auth::id())
            ->get();
        if(!$kontrol->isEmpty()){
            return redirect()->back()->with('error','Bu İlanı Zaten Raporladınız');
        }
        //1 Sahiplenme
        //2 Kayıp
        //3 Eş Bulma
        return view('rapor',compact('ilan_tur','id'));
    }
    public function create_rapor($ilan_tur,$id, Request $request){
        $data = new Rapor();
        $data->ilan_tur = $ilan_tur;
        $data->ilan_id = $id;
        $data->raporlayan_id = Auth::id();
        $data->rapor_nedeni = $request->rapor_nedeni;
        $data->save();
        if($ilan_tur == 1){
            return Redirect::route('sahiplenilecek_hayvan',$id)->with('success', 'İlan başarıyla raporlandı');
        }
        else if($ilan_tur == 2){
            return Redirect::route('kayip_hayvan',$id)->with('success', 'İlan başarıyla raporlandı');
        }
        else if($ilan_tur == 3){
            return Redirect::route('es_bulma_hayvan',$id)->with('success', 'İlan başarıyla raporlandı');
        }
    }
}
