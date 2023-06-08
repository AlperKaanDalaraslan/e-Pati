<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Haber;
use Illuminate\Http\Request;

class HaberController extends Controller
{
    public function show($id){
        $data = Haber::find($id);
        return view('haber_sayfasi',compact('data'));
    }
}
