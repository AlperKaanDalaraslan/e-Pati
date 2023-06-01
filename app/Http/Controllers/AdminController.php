<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sahiplen;
use App\Models\Kayip;
use App\Models\Es_bul;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
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
        return redirect()->back()->with('basarili', 'İlan başarıyla silindi.');
    }

    public function kayip_ilanlari(){
        $data = Kayip::paginate(10);
        return view('admin.kayip_ilanlari', compact('data'));
    }

    public function delete_kayip_ilan($id){
        Kayip::destroy($id);
        return redirect()->back()->with('basarili', 'İlan başarıyla silindi.');
    }

    public function es_bulma_ilanlari(){
        $data = Es_bul::paginate(10);
        return view('admin.es_bulma_ilanlari', compact('data'));
    }
}
