<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rapor;
use App\Models\User;

class AdminRaporController extends Controller
{
    public function raporlar(){
        $data = Rapor::all();
        return view('admin.raporlar', compact('data',));
    }

    public function delete_rapor($id){
        Rapor::destroy($id);
        return redirect()->back()->with('basarili', 'RAPOR BAŞARIYLA SİLİNDİ.');
    }
}
