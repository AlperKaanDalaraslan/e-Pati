<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Veteriner;
use App\Models\Sertifika;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sahiplen;
use App\Models\Kayip;
use App\Models\Es_bul;

class AdminController extends Controller
{

    public function home(){

        $onay_veteriner = Sertifika::all();
        return view('admin.home' , compact('onay_veteriner'));
    }

    public function kullanicilar(){
        $data = User::paginate(10);
        return view('admin.kullanicilar', compact('data'));
    }

    public function delete_user($id){
        // User::destroy($id);
        return redirect()->back();
    }

    public function sahiplenme_ilanlari(){
        $data = Sahiplen::paginate(10);
        return view('admin.sahiplenme_ilanlari', compact('data'));
    }

    public function sahiplenme_ilan_detay($id){
        $data = Sahiplen::find($id);
        return view('admin.ilan_detay', compact('data'));
    }

    public function delete_sahiplen_ilan($id){
        Sahiplen::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function kayip_ilanlari(){
        $data = Kayip::paginate(10);
        return view('admin.kayip_ilanlari', compact('data'));
    }

    public function delete_kayip_ilan($id){
        Kayip::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function es_bulma_ilanlari(){
        $data = Es_bul::paginate(10);
        return view('admin.es_bulma_ilanlari', compact('data'));
    }

    public function delete_es_bulma_ilan($id){
        Es_bul::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function VeterinerOnay($id){
        $vet = \App\Models\Veteriner::where('vet_id', $id)->first();

        if ($vet) {
            $vet->onay = true;
            $vet->save();
        }

        $sertifika_silme=Sertifika::where('vet_id', $id)->first();
        $sertifika_silme->sertifika_img=0;
        $sertifika_silme->save();


        return redirect()->back();
    }

}

