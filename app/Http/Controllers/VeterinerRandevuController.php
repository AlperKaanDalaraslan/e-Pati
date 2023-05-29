<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Veteriner;
use App\Models\User;
use App\Models\Vet_uzmanlik;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;


class VeterinerRandevuController extends Controller
{
    public function index(){
        $data = \App\Models\Veteriner::join('vet_calisma', 'veteriner.vet_id', '=', 'vet_calisma.vet_id')
            ->select('veteriner.*')
            ->distinct('veteriner.vet_id')
            ->paginate(6);


        return view('Veteriner_randevu/veteriner_randevu_anasayfa' , compact('data'));
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
            return view('Veteriner_randevu/veteriner_randevu_anasayfa', compact('data'));
        }
    }

}
