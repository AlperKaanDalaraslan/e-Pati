<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Randevu;
use App\Models\Sertifika;
use App\Models\Vet_calisma;
use App\Models\Vet_uzmanlik;
use App\Models\Veteriner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VeterinerController extends Controller
{
    public function sertifika_kontrol(){
        $vet_id = Auth::id();
        $kontrol = Sertifika::where('vet_id',$vet_id)->first();
        if($kontrol){
        return view('Veteriner/sertifika',compact('kontrol'));
        }
        return redirect()->route('Veteriner_anasayfa');

    }
    public function sertifika(Request $request){
        $data = new Sertifika();
        $data->vet_id = Auth::id();

        if($request->hasFile('image')) {

            $imageName=Str::slug(Auth::user()->email).'.'.$request->image->getClientOriginalExtension();

            $request->image->move(public_path('sertifika'),$imageName);
            $data->sertifika_img = 'sertifika/'.$imageName;
    }
        $data->save();
        return redirect()->route('sertifika');
}
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

    public function createUzmanlik(Request $request){
                $vetId = Auth::id();
                if(!empty($vetId)){
                    Vet_uzmanlik::where('vet_id', $vetId)->delete();
                }
                $data = new Vet_uzmanlik();
                $data->vet_id = $vetId;
                $data->cerrahi = $request->cerrahi;
                $data->muayene = $request->muayene;
                $data->teshis = $request->teshis;
                $data->kuafor = $request->kuafor;
                $data->dahiliye = $request->dahiliye;
                $data->lab = $request->lab;
                $data->koruyucu_hekim = $request->koruyucu_hekim;
                $data->rontgen = $request->rontgen;
                $data->yogun_bakim = $request->yogun_bakim;
                $data->save();

        return redirect()->route('Veteriner_anasayfa');

    }
    public function vet_randevular(){
        $onaylanacakrandevular = Randevu::where('vet_id',Auth::id())
            ->where('randevu_tarih', '>=',Carbon::tomorrow()->format('Y-m-d'))
            ->where('onay', '=', 0)
            ->get();


        $onaylananrandevular = Randevu::where('vet_id',Auth::id())
            ->where('randevu_tarih', '>=',Carbon::tomorrow()->format('Y-m-d'))
            ->where('onay', '=', 1)
            ->get();
        if($onaylanacakrandevular === null){ $onaylanacakrandevular = false;}
        if($onaylananrandevular === null){ $onaylananrandevular = false;}
        return view('Veteriner/Randevularim',compact('onaylanacakrandevular','onaylananrandevular'));

    }
    public function vet_anasayfa(){
        $data = Vet_calisma::where('vet_id', Auth::id())->get();
        $bugununrendevular = Randevu::where('vet_id',Auth::id())
            ->where('randevu_tarih', '=',Carbon::today()->format('Y-m-d'))
            ->where('onay', '=', 1)
            ->get();

        $gunler = [
            'Pazartesi',
            'Salı',
            'Çarşamba',
            'Perşembe',
            'Cuma',
            'Cumartesi',
            'Pazar'];
        $gun_no = ['1', '2', '3', '4', '5', '6', '7',];
        $vetID = Auth::id();
        $uzmanliklar = Vet_uzmanlik::where('vet_id', $vetID)->first();
        $uzmanlik_isim = [
            'cerrahi',
            'muayene',
            'teshis',
            'kuafor',
            'dahiliye',
            'lab',
            'koruyucu_hekim',
            'rontgen',
            'yogun_bakim'
        ];

        return view('Veteriner/Veteriner_anasayfa',compact('data','gunler','gun_no','uzmanliklar','uzmanlik_isim','bugununrendevular'));

    }
    public function calisma_form(){
        $gunler = ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar'];
        $gun_no = ['1', '2', '3', '4', '5', '6', '7',];
        $bas_saat = ['02:00', '03:00', '04:00', '05:00', '06:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00',];
        $randevu_aralik = ['15', '20', '30',];
        return view('Veteriner/Vet_calisma_form',compact('gunler','gun_no','bas_saat','randevu_aralik'));
    }

    public function uzmanlik_form(){
        $vetID = Auth::id();
        $data = Vet_uzmanlik::where('vet_id', $vetID)->first();
        if(empty($data)) {
            $data = new Vet_uzmanlik();
        }
        return view('Veteriner/Vet_uzmanlik_form',compact('data'));
    }
    public function randevu_onayla($id){
        Randevu::where('randevu_id', $id)->update(['onay' => 1]);
        return redirect()->route('Randevularim');
    }
    public function randevu_sil($id){
        Randevu::where('randevu_id', $id)->delete();
        return redirect()->route('Randevularim');
    }
}
