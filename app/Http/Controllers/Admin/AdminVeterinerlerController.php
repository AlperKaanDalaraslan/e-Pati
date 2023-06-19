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
        $data = User::where('status', 2)
            ->join('veteriner', 'users.id', '=', 'veteriner.vet_id')
            ->join('vet_uzmanlik', 'users.id', '=', 'vet_uzmanlik.vet_id')
            ->leftJoin('vet_calisma', 'users.id', '=', 'vet_calisma.vet_id')
            ->select('users.*', 'veteriner.klinik_ad','veteriner.il_id', 'veteriner.ilce', 'veteriner.adres', 'veteriner.onay', 'vet_uzmanlik.cerrahi', 'vet_uzmanlik.teshis', 'vet_uzmanlik.kuafor', 'vet_uzmanlik.dahiliye', 'vet_uzmanlik.lab', 'vet_uzmanlik.muayene', 'vet_uzmanlik.koruyucu_hekim', 'vet_uzmanlik.rontgen', 'vet_uzmanlik.yogun_bakim', 'vet_calisma.gun', 'vet_calisma.randevu_bas', 'vet_calisma.randevu_bit')
            ->paginate(10);
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
