<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sahiplen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SahiplendirmeController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'hayvan_foto'=>'required',
            'hayvan_ad'=>'required',
            'baslik' => 'required',
            'tur'=>'required',
            'cins'=>'required',
            'cinsiyet'=>'required',
            'yas'=>'required',
            'kisir'=>'required',
            'il_id'=>'required',
            'ilce'=>'required',
            'adres'=>'required',
            'aciklama'=>'required',

        ]);



        $data = new Sahiplen();
        $data->user_id = Auth::id();
        $data->hayvan_ad = $request->hayvan_ad;
        $data->tur = $request->tur;
        $data->cins = $request->cins;
        $data->cinsiyet = $request->cinsiyet;
        $data->yas = $request->yas;
        $data->kisir = $request->kisir;
        $data->parazit = $request->parazit;
        $data->kuduz = $request->kuduz;
        $data->karma = $request->karma;
        $data->kalp_kurtlari = $request->kalp_kurtlari;
        $data->cip_no = $request->cip;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->adres = $request->adres;
        $data->baslik = $request->baslik;
        $data->aciklama = $request->aciklama;

        if($request->hasFile('hayvan_foto')) {


//            $imageName = Str::slug($data['hayvan_ad']) . '.' . $data['hayvan_image']->getClientOriginalExtension();//uploadlanan resmin uzantısını tutar
//            $data['hayvan_image']->move(public_path('sahiplen_images'), $imageName);
//            $data['hayvan_image'] = 'sahiplen_images/' . $imageName;

            $imageName=Str::slug($request->hayvan_ad).'.'.$request->hayvan_foto->getClientOriginalExtension();//uploadlanan resmin uzantısını tutar

            $request->hayvan_foto->move(public_path('sahiplen_images'),$imageName);
            $data->hayvan_image = 'sahiplen_images/'.$imageName;

        }

        $data->save();

        return redirect()->route('sahiplendirme_ilan_form');

    }
    public function index(){
        $data = Sahiplen::paginate(5);
        return view('sahiplenmesayfasi',compact('data'));

    }

    public function show($id){
        $data =Sahiplen::find($id);
        return view('sahiplenilecek_hayvan',compact('data'));
    }
}
