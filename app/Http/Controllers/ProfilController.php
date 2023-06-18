<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Es_bul;
use App\Models\Kayip;
use App\Models\Randevu;
use App\Models\Sahiplen;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProfilController extends Controller
{
    public function show_profil(){
        $randevular = Randevu::where('user_id',Auth::id())
            ->where('randevu_tarih', '>=',Carbon::today()->format('Y-m-d'))
            ->get();
        $gecmis_randevular = Randevu::where('user_id',Auth::id())
            ->where('randevu_tarih', '<',Carbon::today()->format('Y-m-d'))
            ->where('onay', 1)
            ->get();
        $sahiplen_ilanlarim = Sahiplen::where('user_id',Auth::id())->get();
        $kayip_ilanrim = Kayip::where('user_id',Auth::id())->get();
        $es_bul_ilanrim = Es_bul::where('user_id',Auth::id())->get();

        return view('profil',compact('randevular','gecmis_randevular','sahiplen_ilanlarim','kayip_ilanrim','es_bul_ilanrim'));
    }
    public function show_randevu($id){
        $randevu = Randevu::where('randevu_id', $id)->first();
        return view('Veteriner_randevu/alinan_randevu',compact('randevu'));

    }
    public function update_form(){
        $user = User::where('id', Auth::id())->first();
        return view('profil_update_form',compact('user'));
    }
    public function update_form_post(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'image' => ['image','mimes:jpeg,png,jpg'],
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'name' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'regex:/^(05)[0-9]{9}$/'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
        ]);
        if( $request->hasFile('image') ){
            File::delete(public_path($user->user_image));
            $imageName=Str::slug( $user->id).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('user_images'),$imageName);
            $user->user_image = '/user_images/'.$imageName;
        }
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profil')->with('success', 'Profiliniz Başarıyla Güncellendi');
    }


}
