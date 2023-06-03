<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kayip;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class KayipController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'hayvan_foto' => 'required',
            'baslik' => 'required',
            'tur' => 'required',
            'cinsiyet' => 'required',
            'kayip_durumu' =>'required',
            'il_id' => 'required',
            'ilce' => 'required',
            'adres' => 'required',
            'aciklama' => 'required',
        ]);


        $data = new Kayip();
        $data->user_id = Auth::id();
        $data->hayvan_ad = $request->hayvan_ad;
        $data->tur = $request->tur;
        $data->cinsiyet = $request->cinsiyet;
        $data->kayip_durumu = $request->kayip_durumu;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->adres = $request->adres;
        $data->baslik = $request->baslik;
        $data->aciklama = $request->aciklama;
        $data->created_date = Carbon::today()->format('Y-m-d');


        if ($request->hasFile('hayvan_foto')) {


            $imageName = Str::slug($request->cip) . '.' . $request->hayvan_foto->getClientOriginalExtension();

            $request->hayvan_foto->move(public_path('kayip_images'), $imageName);
            $data->hayvan_image = 'kayip_images/' . $imageName;

        }

        $data->save();

        return redirect()->route('kayip_ilan_form');

    }

    public function index()
    {
        $data = Kayip::paginate(5);
        return view(' kayip_ilan_sayfasi ', compact('data'));

    }

    public function show($id)
    {
        $data = Kayip::find($id);
        return view('kayip_hayvan', compact('data'));
    }

    public function kriter_fonksiyonu(Request $request)
    {
        $request->validate([
            'tur' => 'required',
            'cinsiyet' => 'required',
            'il_id' => 'required',

        ]);

        $kriter1 = $request->input('il_id');
        $kriter2 = $request->input('cinsiyet');
        $kriter3 = $request->input('tur');

        $veritabanindan_gelen = Kayip::where('il_id', $kriter1)
                                       ->where('cinsiyet', $kriter2)
                                       ->where('tur', $kriter3)
                                       ->get();
       // $veritabanindan_gelen = Kayip::all();



        return view('siralama ', compact('veritabanindan_gelen'));


    }
}
