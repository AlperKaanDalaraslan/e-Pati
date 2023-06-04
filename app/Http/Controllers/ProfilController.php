<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Es_bul;
use App\Models\Kayip;
use App\Models\Randevu;
use App\Models\Sahiplen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function show_profil(){
        $randevular = Randevu::where('user_id',Auth::id())
            ->where('randevu_tarih', '>=',Carbon::today()->format('Y-m-d'))
            ->get();
        $gecmis_randevular = Randevu::where('user_id',Auth::id())
            ->where('randevu_tarih', '<',Carbon::today()->format('Y-m-d'))
            ->where('onay', 1)
            ->get();
        $sahiplen_ilanlarim = Sahiplen::where('user_id',Auth::id())->get();
        $kayip_ilanrim = Kayip::where('user_id',Auth::id())->get();
        $es_bul_ilanrim = Es_bul::where('user_id',Auth::id())->get();

        return view('profil',compact('randevular','gecmis_randevular','sahiplen_ilanlarim','kayip_ilanrim','es_bul_ilanrim'));
    }
    public function show_randevu($id){
        $randevu = Randevu::where('randevu_id', $id)->first();
        return view('Veteriner_randevu/alinan_randevu',compact('randevu'));

    }

}
