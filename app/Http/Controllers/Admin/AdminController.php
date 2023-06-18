<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Es_bul;
use App\Models\Haber;
use App\Models\Kayip;
use App\Models\Rapor;
use App\Models\Sahiplen;
use App\Models\Sertifika;
use App\Models\User;


class AdminController extends Controller
{
    public function home(){
        $haber_count = Haber::count();
        $sertifika_onay_count = Sertifika::count();
        $sahiplen_count = Sahiplen::count();
        $kayip_count = Kayip::count();
        $es_bulma_count = Es_bul::count();
        $rapor_count = Rapor::count();
        $kullanici_count = User::where('status', 1)->count();
        $veteriner_count = User::where('status', 2)->count();
        $yonetici_count = User::where('status', 0)->count();

        return view('admin.home', compact('haber_count', 'sertifika_onay_count', 'sahiplen_count', 'kayip_count', 'es_bulma_count', 'rapor_count', 'kullanici_count', 'veteriner_count', 'yonetici_count'));
    }

}
