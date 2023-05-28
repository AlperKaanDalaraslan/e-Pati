<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Veteriner;
use App\Models\User;
use Illuminate\Http\Request;
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

}
