<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           'image' =>['image','mimes:jpeg,png,jpg'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'tel'=>['required','regex:/^(05)[0-9]{9}$/'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if(isset($data['image'])) {
            $imageName = Str::slug($data['username']) . '.' . $data['image']->getClientOriginalExtension();//uploadlanan resmin uzantısını tutar
            $data['image']->move(public_path('user_images'), $imageName);
            $data['image'] = '/user_images/' . $imageName;

        }
        else {
            // Kullanıcı resim yüklemediği durum
            $data['image'] = 'images/user_2.png'; // Varsayılan resim dosyasının yolu
        }
        return User::create([
            'status' => "1",
            'username' => $data['username'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'user_image' => $data['image'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function registered()
    {
        return redirect()->route('anasayfa');
    }
}
