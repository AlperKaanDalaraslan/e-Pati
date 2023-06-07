<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kayip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Es_bul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EsBulmaController extends Controller
{
    public function index(){
        $data = Es_bul::paginate(5);
        return view('es_bulma_sayfasi', compact('data'));
    }

    public function show($id){
        $data = Es_bul::find($id);
        return view('es_bulma_hayvan', compact('data'));
    }

    public function create(Request $request){
        $request->validate([
            'hayvan_image'=>'required',
            'hayvan_ad'=>'required',
            'tur'=>'required',
            'cins'=>'required',
            'cinsiyet'=>'required',
            'yas'=>'required',
            'kisirlik_durumu'=>'required',
            'il_id'=>'required',
            'ilce'=>'required',
            'adres'=>'required',
            'baslik'=>'required',
            'aciklama'=>'required',
        ]);


        $data = new Es_bul();

        if($request->hasFile('hayvan_image')){
            $imageName=str::slug($request->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();
            $request->hayvan_image->move(public_path('es_bulma_images'), $imageName);
            $data->hayvan_image = '/es_bulma_images/'.$imageName;
        }

        $data->user_id = Auth::id();
        $data->hayvan_ad = $request->hayvan_ad;
        $data->tur = $request->tur;
        $data->cins = $request->cins;
        $data->cinsiyet = $request->cinsiyet;
        $data->yas = $request->yas;
        $data->kisirlik_durumu = $request->kisirlik_durumu;
        $data->il_id = $request->il_id;
        $data->ilce = $request->ilce;
        $data->baslik = $request->baslik;
        $data->adres = $request->adres;
        $data->aciklama = $request->aciklama;
        $data->created_date = Carbon::today()->format('Y-m-d');


        $data->save();

        return redirect()->route('es_bulma_hayvan',$data->id)->with('success', 'İlan başarıyla oluşturuldu.');
    }
    public function esbulma_kriter_fonksiyonu(Request $request)
    {
        $request->validate([
            'tur' => 'required',
            'cinsiyet' => 'required',
            'il_id' => 'required',
            ]);

        $kriter1=$request->input('il_id');
        $kriter2=$request->input('cinsiyet');
        $kriter3=$request->input('tur');

        $veritabanindan_gelen = Es_bul::where('il_id', $kriter1)
                                        ->where('cinsiyet', $kriter2)
                                        ->where('tur', $kriter3)
                                        ->get();

        return view('esbulma_siralama' , compact('veritabanindan_gelen'));
    }
    public function del_esbul_ilan($id){
        $data = Es_bul::find($id);
        File::delete(public_path($data->hayvan_image));
        Es_bul::destroy($id);
        return redirect()->route('profil')->with('success', 'İlan başarıyla silindi.');
    }
    public function show_update($id){
        $data =Es_bul::find($id);
        return view('es_bul_ilan_düzenle',compact('data'));
    }
    public function update_es_bul_ilan_post(Request $request, $id){
        $data = Es_bul::find($id);

        if( $request->baslik ){
            $data->baslik = $request->baslik;
        }

        if( $request->hayvan_ad ){
            $data->hayvan_ad = $request->hayvan_ad;
        }

        if( $request->tur ){
            $data->tur = $request->tur;
        }
        if( $request->cins ){
            $data->cins = $request->cins;
        }
        if( $request->cinsiyet !=null ){
            $data->cinsiyet = $request->cinsiyet;
        }
        if( $request->yas ){
            $data->yas = $request->yas;
        }
        if( $request->kisir != null) {
            $data->kisirlik_durumu = $request->kisir;
        }
        if( $request->il_id ){
            $data->il_id = $request->il_id;
        }
        if( $request->ilce ){
            $data->ilce = $request->ilce;
        }
        if( $request->adres ){
            $data->adres = $request->adres;
        }
        if( $request->aciklama ){
            $data->aciklama = $request->aciklama;
        }
        $data->updated_date = Carbon::today();
        if( $request->hasFile('hayvan_foto') ){
            File::delete(public_path($data->hayvan_image));
            $imageName=Str::slug( $data->id).'.'.$request->hayvan_foto->getClientOriginalExtension();
            $request->hayvan_foto->move(public_path('es_bulma_images'),$imageName);
            $data->hayvan_image = '/es_bulma_images/'.$imageName;
        }
        $data->save();
        return redirect()->route('es_bulma_hayvan',$data->id)->with('success', 'İlan başarıyla güncellendi.');
    }
}
