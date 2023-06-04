<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Veteriner;
use App\Models\Randevu;
use App\Models\Sertifika;
use App\Models\Vet_calisma;
use App\Models\Vet_uzmanlik;

class AdminVeterinerlerController extends Controller
{
    public function veterinerler(){
        $data = User::where('status', 2)->paginate(10);
        return view('admin.veterinerler', compact('data'));
    }

    public function delete_veteriner($id){
        Veteriner::where('vet_id', $id)->delete();
        Randevu::where('vet_id', $id)->delete();
        Sertifika::where('vet_id', $id)->delete();
        Vet_calisma::where('vet_id', $id)->delete();
        Vet_uzmanlik::where('vet_id', $id)->delete();
        User::destroy($id);
        return redirect()->back()->with('basarili', 'VETERİNER VE VETERİNERE AİT BÜTÜN KAYITLAR SİLİNDİ.');
    }
}
