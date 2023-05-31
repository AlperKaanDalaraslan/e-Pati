<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Randevu;
use App\Models\User;
use App\Models\Vet_calisma;
use App\Models\Vet_uzmanlik;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Veteriner;


class VeterinerRandevuController extends Controller
{
    public function index(){
        $data = \App\Models\Veteriner::join('vet_calisma', 'veteriner.vet_id', '=', 'vet_calisma.vet_id')
            ->select('veteriner.*')
            ->distinct('veteriner.vet_id')
            ->paginate(6);
        $tarih = Carbon::tomorrow()->format('Y-m-d');

        return view('Veteriner_randevu/veteriner_randevu_anasayfa' , compact('data','tarih'));
    }
    public function elequenormindex(Request $request)
    {
        if (!empty($request)) {
            $ilID = $request->il_id;
            $uzmanlikID = $request->neden;
            $veterinerler = \App\Models\Veteriner::join('vet_calisma', 'veteriner.vet_id', '=', 'vet_calisma.vet_id')
                ->select('veteriner.*')
                ->distinct('veteriner.vet_id')
                ->get();

            $filteredVeterinerler = $veterinerler->filter(function ($veteriner) use ($ilID, $uzmanlikID) {
                $uzmanlik = Vet_uzmanlik::where('vet_id', $veteriner->vet_id)->first();

                return $veteriner->il_id == $ilID && $uzmanlik->{$uzmanlikID} == "1";
            });

            $page = $request->query('page', 1);
            $perPage = 6;
            $offset = ($page - 1) * $perPage;
            $items = $filteredVeterinerler->slice($offset, $perPage);

            $data = new LengthAwarePaginator(
                $items,
                $filteredVeterinerler->count(),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );
            $tarih = Carbon::tomorrow()->format('Y-m-d');
            return view('Veteriner_randevu/veteriner_randevu_anasayfa', compact('data','tarih'));
        }
    }
public function show_vet($vet_id,$tarih){
    $tarih = Carbon::parse($tarih)->timezone('Europe/Istanbul')->toDateString();
    $data = Vet_calisma::where('vet_id', $vet_id)->get();
        $vet = Veteriner::where('vet_id', $vet_id)->first();
    $gunler = [
        'Pazartesi',
        'Salı',
        'Çarşamba',
        'Perşembe',
        'Cuma',
        'Cumartesi',
        'Pazar'];
    $uzmanlik_isim_table = DB::getSchemaBuilder()->getColumnListing('vet_uzmanlik');
    $uzmanlik_isim = array_diff($uzmanlik_isim_table , ['id','vet_id']);
    $uzmanliklar = Vet_uzmanlik::where('vet_id', $vet_id)->first();

    $randevu = Randevu::where('randevu_tarih', $tarih)
        ->where('vet_id', $vet_id)
        ->get();
    $gunNo = date('N', strtotime($tarih)); // Tarih formatını gün numarasına dönüştürür (1: Pazartesi, 2: Salı, vs.)

    $calisma = Vet_calisma::where('vet_id', $vet_id)
        ->where('gun', $gunNo)
        ->first();
    if ($calisma === null){
        $calisma = false;

        return view('Veteriner_randevu/Randevu_alma',compact('data','gunler','vet','uzmanlik_isim','uzmanliklar','tarih','calisma'));
    }
    $bas_saat = date('H:i', strtotime($calisma->randevu_bas));
    $bit_saat = date('H:i', strtotime($calisma->randevu_bit));
    $aralik = $calisma->randevu_aralik;

    $start_time = strtotime($bas_saat);
    $end_time = strtotime($bit_saat);

    $sonuc = [];
    while ($start_time < $end_time) {
        $current_time = date('H:i', $start_time);
        $alabilir = true;
        foreach ($randevu as $r) {
            $randevu_saat = date('H:i', strtotime($r->randevu_saat));

            if ($current_time == $randevu_saat) {
                $alabilir = false;
                $sonuc[] = "<button class=\"button-alt\" disabled>$current_time</button>";
            }
        }
        if($alabilir){
            $sonuc[] = "<a class=\"button-alt-withlink\" href=\"" . route('randevu_olustur', ['id' => $vet_id, 'saat' => $current_time,'tarih' =>$tarih]) . "\">$current_time</a>";


        }

        $start_time = strtotime('+' . $aralik . ' minutes', $start_time);
    }




        return view('Veteriner_randevu/Randevu_alma',compact('data','gunler','vet','uzmanlik_isim','uzmanliklar','tarih','sonuc','calisma'));
    }


public function createRandevu($vet_id,$saat,$tarih){
        $data = new Randevu();
        $data->user_id = Auth::id();
        $data->vet_id = $vet_id;
        $data->randevu_saat = $saat;
        $data->randevu_tarih = $tarih;
        $data->save();
        return redirect()->route('anasayfa');

}
}
