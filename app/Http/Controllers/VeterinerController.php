<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vet_calisma;
use App\Models\Veteriner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinerController extends Controller
{

    public function createCalisma(Request $request){


        if(!empty($request->day)){
            $vetId = Auth::id();

            Vet_calisma::where('vet_id', $vetId)->delete();
            foreach ($request->day as $item) {
                $data = new Vet_calisma();
                $data->vet_id = Auth::id();
                $data->gun = $item;
                $data->randevu_bas = $request[ $item.'-start'];
                $data->randevu_bit = $request[ $item.'-end'];
                $data->randevu_aralik = $request->randevu_aralik;
                $data->save();

            }
        return redirect()->route('Veteriner_anasayfa');

        }
        else{
            return redirect()->route('Vet_calisma_form')->withErrors('LÜTFEN EN AZ BİR GÜN SEÇİNİZ');
        }



    }
    public function vet_anasayfa(){
        $data = Vet_calisma::where('vet_id', Auth::id())->get();
        $gunler = [
            'Pazartesi',
            'Salı',
            'Çarşamba',
            'Perşembe',
            'Cuma',
            'Cumartesi',
            'Pazar'];
        $gun_no = ['1', '2', '3', '4', '5', '6', '7',];

        return view('Veteriner/Veteriner_anasayfa',compact('data','gunler','gun_no'));

    }
    public function form(){
        $gunler = ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar'];
        $gun_no = ['1', '2', '3', '4', '5', '6', '7',];
        $bas_saat = ['02:00', '03:00', '04:00', '05:00', '06:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00',];
        $randevu_aralik = ['15', '20', '30', '60',];
        return view('Veteriner/Vet_calisma_form',compact('gunler','gun_no','bas_saat','randevu_aralik'));
    }
}