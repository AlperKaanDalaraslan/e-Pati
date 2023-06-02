<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Veteriner;
use App\Models\Sertifika;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sahiplen;
use App\Models\Kayip;
use App\Models\Es_bul;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function home(){

        $onay_veteriner = Sertifika::all();
        return view('admin.home' , compact('onay_veteriner'));
    }

    public function kullanicilar(){
        $data = User::paginate(10);
        return view('admin.kullanicilar', compact('data'));
    }

    public function delete_user($id){
        // User::destroy($id);
        return redirect()->back();
    }

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

            $imageName=Str::slug($request->hayvan_ad).'.'.$request->hayvan_image->getClientOriginalExtension();//uploadlanan resmin uzantısını tutar
            $request->hayvan_image->move(public_path('sahiplen_images'),$imageName);
            $data->hayvan_image = 'sahiplen_images/'.$imageName;

            //$new_image = $request->hasFile('hayvan_image');
            //$new_image_yol = $new_image->store('public/sahiplen_images');
            //$data->hayvan_image = $new_image_yol;

        }elseif($data->hayvan_image){
            $data->hayvan_image = $data->hayvan_image;
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
        if( $request->cinsiyet ){
            $data->cinsiyet = $request->cinsiyet;
        }
        if( $request->yas ){
            $data->yas = $request->yas;
        }
        if( $request->kisirlik_durumu ){
            $data->kisir = $request->kisirlik_durumu;
        }
        if( $request->kuduz ){
            $data->kuduz = $request->kuduz;
        }
        if( $request->karma ){
            $data->kuduz = $request->karma;
        }
        if( $request->parazit ){
            $data->kuduz = $request->parazit;
        }
        if( $request->kalp_kurtlari ){
            $data->kuduz = $request->kalp_kurtlari;
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

        $data->save();

        return redirect()->back()->with('basarili', 'İLAN GÜNCELLENDİ.');
    }

    public function delete_sahiplen_ilan($id){
        Sahiplen::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function kayip_ilanlari(){
        $data = Kayip::paginate(10);
        return view('admin.kayip_ilanlari', compact('data'));
    }

    public function delete_kayip_ilan($id){
        Kayip::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function es_bulma_ilanlari(){
        $data = Es_bul::paginate(10);
        return view('admin.es_bulma_ilanlari', compact('data'));
    }

    public function delete_es_bulma_ilan($id){
        Es_bul::destroy($id);
        return redirect()->back()->with('basarili', 'İLAN BAŞARIYLA SİLİNDİ.');
    }

    public function VeterinerOnay($id){
        $vet = \App\Models\Veteriner::where('vet_id', $id)->first();

        if ($vet) {
            $vet->onay = true;
            $vet->save();
        }

        $sertifika_silme=Sertifika::where('vet_id', $id)->first();
        $sertifika_silme->sertifika_img=0;
        $sertifika_silme->save();


        return redirect()->back();
    }

}

