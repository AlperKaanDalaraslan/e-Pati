<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sahiplen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminSahiplenIlanController extends Controller
{
    public function sahiplenme_ilanlari(){
        $data = Sahiplen::paginate(10);
        return view('admin.sahiplenme_ilanlari', compact('data'));
    }

    public function update_sahiplen_ilan($id){
        $data = Sahiplen::find($id);
        return view('admin.update_sahiplen_ilan', compact('data'));
    }

    public function update_sahiplen_ilan_post(Request $request, $id){
        $data = Sahiplen::find($id);

        if( $request->ilan_baslik ){
            $data->baslik = $request->ilan_baslik;
        }

        if( $request->hasFile('hayvan_image') ){

            Storage::delete($data->hayvan_image);

            $imageName=Str::slug($request->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();
            $request->hayvan_image->move(public_path('sahiplen_images'),$imageName);
            $data->hayvan_image = 'sahiplen_images/'.$imageName;

            //$new_image = $request->hasFile('hayvan_image');
            //$new_image_yol = $new_image->store('public/sahiplen_images');
            //$data->hayvan_image = $new_image_yol;

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
        if( $request->has('cinsiyet') ){
            $data->cinsiyet = $request->cinsiyet;
        }
        if( $request->yas ){
            $data->yas = $request->yas;
        }
        if( $request->has('kisirlik_durumu') ){
            $data->kisir = $request->kisirlik_durumu;
        }
        if( $request->kuduz ){
            $data->kuduz = $request->kuduz;
        }else{
            $data->kuduz = 0;
        }
        if( $request->karma ){
            $data->karma = $request->karma;
        }else{
            $data->karma = 0;
        }
        if( $request->parazit ){
            $data->parazit = $request->parazit;
        }else{
            $data->parazit = 0;
        }
        if( $request->kalp_kurtlari ){
            $data->kalp_kurtlari = $request->kalp_kurtlari;
        }else{
            $data->kalp_kurtlari = 0;
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

    public function delete_sahiplen_ilan($id){
        Sahiplen::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

}
