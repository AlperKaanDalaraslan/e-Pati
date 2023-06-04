<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifika;

class AdminVeterinerSertifikaOnayController extends Controller
{
    public function veteriner_sertifika_onay(){
        $onay_veteriner = Sertifika::paginate(10);
        return view('admin.veteriner_sertifika_onay' , compact('onay_veteriner'));
    }

    public function VeterinerOnay($id){
        $vet = \App\Models\Veteriner::where('vet_id', $id)->first();

        if ($vet) {
            $vet->onay = true;
            $vet->save();
        }

        $sertifika_silme=Sertifika::where('vet_id', $id)->first();
        $sertifika_silme->delete();

        return redirect()->back();
    }

    public function VeterinerRed($id){
        $vet = \App\Models\Veteriner::where('vet_id', $id)->first();

        if ($vet) {
            $vet->onay = -1;
            $vet->save();
        }
        $sertifika_silme=Sertifika::where('vet_id', $id)->first();
        $sertifika_silme->delete();

        return redirect()->back();
    }

}
