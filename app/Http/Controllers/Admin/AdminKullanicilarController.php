<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sahiplen;
use App\Models\Kayip;
use App\Models\Es_bul;
use App\Models\Randevu;
use App\Models\User;
use Illuminate\Http\Request;

class AdminKullanicilarController extends Controller
{
    public function kullanicilar(){
        $data = User::where('status', 1)->paginate(10);
        return view('admin.kullanicilar', compact('data'));
    }

    public function delete_kullanici($id){
        Sahiplen::where('user_id', $id)->delete();
        Kayip::where('user_id', $id)->delete();
        Es_bul::where('user_id', $id)->delete();
        Randevu::where('user_id', $id)->delete();
        User::destroy($id);
        return redirect()->back()->with('basarili', 'KULLANICI VE KULLANICIYA AİT BÜTÜN KAYITLAR SİLİNDİ.');
    }

}
