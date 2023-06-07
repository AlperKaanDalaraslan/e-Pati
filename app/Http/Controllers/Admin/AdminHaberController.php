<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Haber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHaberController extends Controller
{
    public function haberler(){
        $data = Haber::paginate(10);
        return view('admin.haberler', compact('data'));
    }

    public function create_haber_post(Request $request){
        $request->validate([
            'haber_image' => 'required',
            'haber_baslik' => 'required',
            'haber_icerik' => 'required',
        ]);

        $data = new Haber();

        $data->user_id = Auth::id();

        if( $request->hasFile('haber_image') ){
            $new_image = $request->hasFile('haber_image');
            $new_image_yol = $new_image->store('public/haber_images');
            $data->haber_image = $new_image_yol;
        } else {
            // Varsayılan bir resim yolunu atayabilirsiniz
            $data->haber_image = 'public/haber_images/animal-2.jpg';
        }

        $data->haber_baslik = $request->haber_baslik;
        $data->haber_icerik = $request->haber_icerik;

        $data->save();

        return redirect()->route('haberler')->with('basarili', 'HABER BAŞARIYLA OLUŞTURULDU.');
    }

    public function update_haber($id){
        $data = Haber::find($id);
        return view('admin.update_haber', compact('data'));
    }

    public function update_haber_post(Request $request, $id){
        $data = Haber::find($id);

        if( $request->hasFile('haber_image') ){
            $new_image = $request->hasFile('haber_image');
            $new_image_yol = $new_image->store('public/haber_images');
            $data->haber_image = $new_image_yol;
        } else {
            // Varsayılan bir resim yolunu atayabilirsiniz
            $data->haber_image = 'public/haber_images/animal-2.jpg';
        }
        if( $request->haber_baslik ){
            $data->haber_baslik = $request->haber_baslik;
        }
        if( $request->haber_icerik ){
            $data->haber_icerik = $request->haber_icerik;
        }

        $data->save();

        return redirect()->back()->with('basarili', 'HABER GÜNCELLENDİ.');
    }

    public function delete_haber($id){
        Haber::destroy($id);
        return redirect()->back()->with('basarili', 'HABER BAŞARIYLA SİLİNDİ.');
    }

}