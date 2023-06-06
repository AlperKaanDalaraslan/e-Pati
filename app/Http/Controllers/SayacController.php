<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Es_bul;
use App\Models\Kayip;
use App\Models\Sahiplen;
use App\Models\Sayac;
use Illuminate\Http\Request;

class SayacController extends Controller
{
    public function ekle_Sahiplen($id){
        $kontrol = Sahiplen::where('id',$id)->first();
        if($kontrol){
            Sahiplen::destroy('id',$id);
            $artir = Sayac::find(1);
            $artir->sahiplen += 1;
            $artir->save();
        }
        return redirect()->back()->with('success', 'İlan başarıyla onaylandı.');
    }
    public function ekle_Kayip($id){
        $kontrol = Kayip::where('id',$id)->first();
        if($kontrol){
            Kayip::destroy('id',$id);
            $artir = Sayac::find(1);
            $artir->kayip += 1;
            $artir->save();
        }
        return redirect()->back()->with('success', 'İlan başarıyla onaylandı.');
    }
    public function ekle_Es_bul($id){
        $kontrol = Es_bul::where('id',$id)->first();
        if($kontrol){
            Es_bul::destroy('id',$id);
            $artir = Sayac::find(1);
            $artir->es_bul += 1;
            $artir->save();
        }
        return redirect()->back()->with('success', 'İlan başarıyla onaylandı.');
    }
}
