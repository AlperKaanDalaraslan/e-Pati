<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kayip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminKayipIlanController extends Controller
{
    public function kayip_ilanlari(){
        $data = Kayip::paginate(10);
        return view('admin.kayip_ilanlari', compact('data'));
    }

    public function update_kayip_ilan($id){
        $data = Kayip::find($id);
        return view('admin.update_kayip_ilan', compact('data'));
    }

    public function update_kayip_ilan_post(Request $request, $id){
        $data = Kayip::find($id);
        if( $request->has('kayip_durumu') ){
            $data->kayip_durumu = $request->kayip_durumu;
        }
        if( $request->ilan_baslik ){
            $data->baslik = $request->ilan_baslik;
        }

        if( $request->hasFile('hayvan_image') ){

            Storage::delete($data->hayvan_image);

            $imageName=Str::slug($request->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();
            $request->hayvan_image->move(public_path('kayip_images'),$imageName);
            $data->hayvan_image = '/kayip_images/'.$imageName;

            //$new_image = $request->hasFile('hayvan_image');
            //$new_image_yol = $new_image->store('public/sahiplen_images');
            //$data->hayvan_image = $new_image_yol;

        }

        if( $request->tur ){
            $data->tur = $request->tur;
        }
        if( $request->hayvan_ad ){
            $data->hayvan_ad = $request->hayvan_ad;
        }
        if( $request->has('cinsiyet') ){
            $data->cinsiyet = $request->cinsiyet;
        }
        if( $request->cip ){
            $data->cip_no = $request->cip;
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

    public function delete_kayip_ilan($id){
        Kayip::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

}
