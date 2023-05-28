<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnasayfaController extends Controller
{
    public function kontrol(){
        if(Auth::check()) {
            if (Auth::user()->status == 2) {
                return redirect()->route('Veteriner_anasayfa');
            }
            else if (Auth::user()->status == 0){
                return redirect()->route('anasayfa'); // admin paneli olunca değiştirilecek
            }
        }
        return view('anasayfa');
    }
}
