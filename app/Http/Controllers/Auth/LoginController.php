<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function authenticated(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Giriş başarılı

            $user = Auth::user();

            if ($user->status === 0) {
                // Kullanıcı admin ise admin paneline yönlendir
                return redirect()->route('admin_panel');
            } else if($user->status === 1) {
                // Kullanıcı admin değil, farklı bir yere yönlendirilebilir veya bir hata mesajı gösterilebilir.
                return redirect()->route('anasayfa');
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'email' => 'Lütfen veteriner giriş bölümünden giriş yapınız',]);
            }
        } else {
            // Giriş başarısız
            return redirect()->route('login')->withErrors([
                'email' => 'Hatalı giriş bilgileri.',
            ]);
        }
    }
    public function vet_authenticated(Request $request){

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->status === 2) {

                // Kullanıcı veteriner ise admin paneline yönlendir
                return redirect()->route('Veteriner_anasayfa');
            } else if($user->status === 1 or $user->status === 1 ) {
                // Kullanıcı veteriner değil
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'email' => 'Lütfen kullanıcı bölümünden giriş yapınız',
                ]);
            }
        }
        else {
            // Giriş başarısız
            return redirect()->route('login')->withErrors([
                'email' => 'Hatalı giriş bilgileri.',
            ]);
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
