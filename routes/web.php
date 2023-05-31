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
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\VeterinerRandevuController;


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

Route::get('/',[AnasayfaController::class,'kontrol'])->name('anasayfa');

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

    Route::get('kayip/arama_post' , [KayipController::class, 'kriter_fonksiyonu'])->name('arama_post');

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


Route::middleware('auth')->get('/Veteriner-randevu',[VeterinerRandevuController::class, 'index'])->name('veteriner_randevu_anasayfa');
Route::middleware('auth')->get('/Veteriner-randevu-1',[VeterinerRandevuController::class, 'elequenormindex'])->name('vet_index_orm');
Route::middleware('auth')->get('/Veteriner-randevu-alma/{id}/{tarih}',[VeterinerRandevuController::class,'show_vet'])->name('randevu_alma');
Route::middleware('auth')->get('/Veteriner-randevu-alma/{id}/{saat}/{tarih}/',[VeterinerRandevuController::class,'createRandevu'])->name('randevu_olustur');

Route::middleware([Veteriner::class])->get('/Veteriner-Panel',[VeterinerController::class,'vet_anasayfa'])->name('Veteriner_anasayfa');
Route::middleware([Veteriner::class])->get('/Veteriner-Profil',function (){return view('Veteriner/Vet_profil');})->name('Vet_profil');
Route::middleware([Veteriner::class])->get('/Veteriner-Calisma-Saat',[VeterinerController::class,'calisma_form'])->name('Vet_calisma_form');
Route::middleware([Veteriner::class])->get('/Veteriner-uzmanlik',[VeterinerController::class,'uzmanlik_form'])->name('Vet_uzmanlik_form');

Route::middleware([Veteriner::class])->get('/Vet_calisma_form_post',[VeterinerController::class,'createCalisma'])->name('Vet_calisma_form_post');
Route::middleware([Veteriner::class])->get('/Vet_uzmanlik_form_post',[VeterinerController::class,'createUzmanlik'])->name('Vet_uzmanlik_form_post');
Route::middleware([Veteriner::class])->get("/Vet_randevu_onay/{id}",[VeterinerController::class,'randevu_onayla'])->name('randevu_onayla');
Route::middleware([Veteriner::class])->get("/Vet_randevu_sil/{id}",[VeterinerController::class,'randevu_sil'])->name('randevu_sil');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


