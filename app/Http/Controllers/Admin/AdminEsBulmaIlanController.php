<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Es_bul;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminEsBulmaIlanController extends Controller
{
    public function es_bulma_ilanlari(){
        $data = Es_bul::paginate(10);
        return view('admin.es_bulma_ilanlari', compact('data'));
    }

    public function update_es_bulma_ilan($id){
        $data = Es_bul::find($id);
        return view('admin.update_es_bulma_ilan', compact('data'));
    }

    public function update_es_bulma_ilan_post(Request $request, $id){
        $data = Es_bul::find($id);

        if( $request->ilan_baslik ){
            $data->baslik = $request->ilan_baslik;
        }
        if( $request->hayvan_ad ){
            $data->hayvan_ad = $request->hayvan_ad;
        }
        if( $request->hasFile('hayvan_image') ){
            File::delete(public_path($data->hayvan_image));
            $imageName=Str::slug($data->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();
            $request->hayvan_image->move(public_path('es_bulma_images'),$imageName);
            $data->hayvan_image = '/es_bulma_images/'.$imageName;
        }
        if( $request->tur ){
            $data->tur = $request->tur;
        }
        if( $request->cins ){
            $data->cins = $request->cins;
        }
        if( $request->has('cinsiyet') ){
            $data->cinsiyet = $request->cinsiyet;
        }
        if( $request->yas ){
            $data->yas = $request->yas;
        }
        if( $request->has('kisirlik_durumu') ){
            $data->kisirlik_durumu = $request->kisirlik_durumu;
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
        $data->updated_date = Carbon::today()->format('Y-m-d');
        $data->save();

        return redirect()->back()->with('basarili', 'İLAN GÜNCELLENDİ.');
    }

    public function delete_es_bulma_ilan($id){
        Es_bul::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

}
