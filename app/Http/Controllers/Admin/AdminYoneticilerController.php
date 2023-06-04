<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sahiplen;
use App\Models\Kayip;
use App\Models\Es_bul;
use App\Models\Randevu;
use App\Models\Haber;
use App\Models\User;

class AdminYoneticilerController extends Controller
{
    public function yoneticiler(){
        $data = User::where('status', 0)->paginate(10);
        return view('admin.yoneticiler', compact('data'));
    }

    public function delete_yonetici($id){
        Sahiplen::where('user_id', $id)->delete();
        Kayip::where('user_id', $id)->delete();
        Es_bul::where('user_id', $id)->delete();
        Randevu::where('user_id', $id)->delete();
        Haber::where('user_id', $id)->delete();
        User::destroy($id);
        return redirect()->back()->with('basarili', 'YÖNETİCİ VE YÖNETİCİYE AİT BÜTÜN KAYITLAR SİLİNDİ.');
    }
}
