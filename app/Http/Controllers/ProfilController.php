<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Randevu;
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
        return view('profil',compact('randevular','gecmis_randevular'));
    }
    public function show_randevu($id){
        $randevu = Randevu::where('randevu_id', $id)->first();
        return view('Veteriner_randevu/alinan_randevu',compact('randevu'));

    }
}
