<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Veteriner;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class VetRegisterController extends Controller
{
    use RegistersUsers;


    public function __construct()
    {
        $this->middleware('guest');
    }





    protected function create(Request $request)
    {

        $request->validate([
            'image' =>['image','mimes:jpeg,png,jpg'],
            'tel'=>['required','regex:/^(05)[0-9]{9}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'klinik_ad' =>['required', 'string','max:255'],
            'il_id' => ['required'],
            'ilce' => ['required'],
            'adres' => ['required', 'max:1000'],

        ]);






        $data = new User();
        $data->status = 2;
        $data->email = $request->email;
        $data->tel = $request->tel;
        $data->password = Hash::make($request->password);

        if($request->hasFile('image')) {

            $imageName=Str::slug($request->klinik_ad).$request->email.'.'.$request->image->getClientOriginalExtension();//uploadlanan resmin uzantısını tutar

            $request->image->move(public_path('vet_images'),$imageName);
            $data->user_image = 'vet_images/'.$imageName;

        }else {
            // veterinerin resim yüklemediği durum
            $data->user_image = 'images/user_2.png'; // Varsayılan resim dosyasının yolu
        }

        $data->save();
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials); // id yi çekebilmem için giriş yaptırdım


        $data2 = new Veteriner();
        $data2->vet_id = Auth::id();
        $data2->klinik_ad = $request->klinik_ad;
        $data2->il_id = $request->il_id;
        $data2->ilce = $request->ilce;
        $data2->adres = $request->adres;
        $data2->onay = 0;


        $data2->save();

        return redirect(route('sertifika'));
    }
}
