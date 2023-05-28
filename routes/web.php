<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VetRegisterController;
use App\Http\Controllers\KayipController;
use App\Http\Middleware\Veteriner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SahiplendirmeController;
use App\Http\Controllers\EsBulmaController;
use App\Http\Controllers\VeterinerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('anasayfa');
})->name('anasayfa');

Route::post('sahiplenme/sahiplendirme_ilan_post',[SahiplendirmeController::class,'create'])->name('sahiplendirme_ilan_post');


Route::prefix('sahiplenme')->middleware('auth')->group(function (){

    Route::get('/',[SahiplendirmeController::class,'index'])->name('sahiplenmesayfasi');


    Route::get('/sahiplenilecek_hayvan/{id}',[SahiplendirmeController::class,'show'])->name('sahiplenilecek_hayvan');

    Route::get('/sahiplenme_ilan_ver' , function (){
        return view('sahiplendirme_ilan_form');
    })->name('sahiplendirme_ilan_form');

});

Route::post('kayip/kayip_ilan_post',[KayipController::class,'create'])->name('kayip_ilan_post');


Route::prefix('kayip')->middleware('auth')->group(function (){



    Route::get('/',[KayipController::class,'index'])->name('kayip_ilan_sayfasi');

    Route::get('/kayip_hayvan/{id}',[KayipController::class,'show'])->name('kayip_hayvan');

    Route::get('/kayip_ilan_ver' , function (){
        return view('kayip_ilan_form');
    })->name('kayip_ilan_form');

});




Route::prefix('es_bulma')->middleware('auth')->group(function (){

    Route::get('/', [EsBulmaController::class, 'index'])->name('es_bulma_sayfasi');

    Route::get('/es_bulma_hayvan/{id}', [EsBulmaController::class, 'show'])->name('es_bulma_hayvan');

    Route::get('/es_ilan_ver', function (){ return view('es_ilan_form'); })->name('es_ilan_form');

    Route::post('/es_bulma_ilan_post', [EsBulmaController::class, 'create'])->name('es_bulma_ilan_post');
});




Route::middleware('auth')->get('/profil', function (){
    return view('profil');
})->name('profil');

Route::get('/vet_register',function (){return view('auth/vet_register');})->name('vet_register');
Route::post('/vet_register_post',[VetRegisterController::class,'create'])->name('vet_register_post');

Route::post('/login',[LoginController::class, 'authenticated'])->name('login');
Route::post('/vet_login',[LoginController::class, 'vet_authenticated'])->name('vet_login');



Route::middleware([Veteriner::class])->get('/Veteriner-Panel',[VeterinerController::class,'vet_anasayfa'])->name('Veteriner_anasayfa');
Route::middleware([Veteriner::class])->get('/Veteriner-Profil',function (){return view('Veteriner/Vet_profil');})->name('Vet_profil');
Route::middleware([Veteriner::class])->get('/Veteriner-Calisma-Saat',[VeterinerController::class,'form'])->name('Vet_calisma_form');

Route::middleware([Veteriner::class])->get('/Vet_calisma_form_post',[VeterinerController::class,'createCalisma'])->name('Vet_calisma_form_post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
