<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sayac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnasayfaController extends Controller
{
    public function kontrol(){
        if(Auth::check()) {
            if (Auth::user()->status == 2) {
                if(Auth::user()->getVeteriner->onay == 1){
                return redirect()->route('Veteriner_anasayfa');
                }
                else{

                    return redirect()->route('sertifika');
                }
            }
            else if (Auth::user()->status == 0){
                return redirect()->route('admin_panel'); // admin paneli olunca değiştirilecek
            }
        }
        $sayac = Sayac::find(1);
        return view('anasayfa',compact('sayac'));
    }
}
