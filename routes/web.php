<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHaberController;
use App\Http\Controllers\Admin\AdminVeterinerSertifikaOnayController;
use App\Http\Controllers\Admin\AdminSahiplenIlanController;
use App\Http\Controllers\Admin\AdminKayipIlanController;
use App\Http\Controllers\Admin\AdminEsBulmaIlanController;
use App\Http\Controllers\Admin\AdminRaporController;
use App\Http\Controllers\Admin\AdminKullanicilarController;
use App\Http\Controllers\Admin\AdminVeterinerlerController;
use App\Http\Controllers\Admin\AdminYoneticilerController;

use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VetRegisterController;
use App\Http\Controllers\EsBulmaController;
use App\Http\Controllers\KayipController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SahiplendirmeController;
use App\Http\Controllers\VeterinerController;
use App\Http\Controllers\VeterinerRandevuController;
use App\Http\Middleware\Veteriner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayacController;


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
    Route::get('/sahiplenilecek_hayvan-update/{id}',[SahiplendirmeController::class,'show_update'])->name('sahiplenilecek_hayvan_duzenle');


    Route::get('/sahiplenme_ilan_ver' , function (){
        return view('sahiplendirme_ilan_form');
    })->name('sahiplendirme_ilan_form');
   Route::get('/sahiplenme_post', [SahiplendirmeController::class, 'sahiplenme_kriter_fonksiyonu'])->name('sahiplenme_post');
   Route::get('/sahiplenme-sil/{id}',[SahiplendirmeController::class,'del_sahiplen_ilan'])->name('s_ilan_sil');
    Route::post('/sahiplenilecek_hayvan_update_post/{id}',[SahiplendirmeController::class,'update_sahiplen_ilan_post'])->name('update_sahiplen');

});

Route::post('kayip/kayip_ilan_post',[KayipController::class,'create'])->name('kayip_ilan_post');


Route::prefix('kayip')->middleware('auth')->group(function (){



    Route::get('/',[KayipController::class,'index'])->name('kayip_ilan_sayfasi');

    Route::get('/kayip_hayvan/{id}',[KayipController::class,'show'])->name('kayip_hayvan');

    Route::get('/kayip_ilan_ver' , function (){
        return view('kayip_ilan_form');
    })->name('kayip_ilan_form');

    Route::get('kayip/arama_post' , [KayipController::class, 'kriter_fonksiyonu'])->name('arama_post');
    Route::get('/kayip-sil/{id}',[KayipController::class,'del_kayip_ilan'])->name('k_ilan_sil');
    Route::get('/kayip_hayvan-update/{id}',[KayipController::class,'show_update'])->name('kayip_hayvan_duzenle');
    Route::post('/kayip_hayvan_update_post/{id}',[KayipController::class,'update_kayip_ilan_post'])->name('update_kayip');



});




Route::prefix('es_bulma')->middleware('auth')->group(function (){
    Route::get('/', [EsBulmaController::class, 'index'])->name('es_bulma_sayfasi');
    Route::get('/es_bulma_hayvan/{id}', [EsBulmaController::class, 'show'])->name('es_bulma_hayvan');
    Route::get('/es_ilan_ver', function (){ return view('es_ilan_form'); })->name('es_ilan_form');
    Route::post('/es_bulma_ilan_post', [EsBulmaController::class, 'create'])->name('es_bulma_ilan_post');
    Route::get('/esbulma_post' , [EsBulmaController::class, 'esbulma_kriter_fonksiyonu'])->name('esbulma_post');
    Route::get('/esbulma-sil/{id}',[EsBulmaController::class,'del_esbul_ilan'])->name('e_ilan_sil');
    Route::get('/es_bul-update/{id}',[EsBulmaController::class,'show_update'])->name('es_bul_duzenle');
    Route::post('/es_bul_update_post/{id}',[EsBulmaController::class,'update_es_bul_ilan_post'])->name('update_es_bul');

});


Route::prefix('/admin_panel')->middleware('auth')->group(function(){
    Route::get('/', [AdminController::class, 'home'])->name('admin_panel');

    Route::prefix('/haberler')->middleware('auth')->group(function(){
        Route::get('/', [AdminHaberController::class, 'haberler'])->name('haberler');
        Route::get('/create_haber', function(){ return view('admin.create_haber'); })->name('create_haber');
        Route::post('/create_haber_post', [AdminHaberController::class, 'create_haber_post'])->name('create_haber_post');
        Route::get('/update_haber/{id}', [AdminHaberController::class, 'update_haber'])->name('update_haber');
        Route::post('/update_haber_post/{id}', [AdminHaberController::class, 'update_haber_post'])->name('update_haber_post');
        Route::post('/delete_haber/{id}', [AdminHaberController::class, 'delete_haber'])->name('delete_haber');
    });

    Route::prefix('/veteriner_sertifika_onay')->middleware('auth')->group(function (){
        Route::get('/', [AdminVeterinerSertifikaOnayController::class, 'veteriner_sertifika_onay'])->name('veteriner_sertifika_onay');
        Route::get('/VetOnay/{id}', [AdminVeterinerSertifikaOnayController::class, 'VeterinerOnay' ])->name('VetOnay');
        Route::get('/VetRed/{id}', [AdminVeterinerSertifikaOnayController::class, 'VeterinerRed' ])->name('VetRed');
    });

    Route::prefix('/sahiplenme_ilanlari')->middleware('auth')->group(function(){
        Route::get('/', [AdminSahiplenIlanController::class, 'sahiplenme_ilanlari'])->name('sahiplenme_ilanlari');
        Route::get('/update_sahiplen_ilan/{id}', [AdminSahiplenIlanController::class, 'update_sahiplen_ilan'])->name('update_sahiplen_ilan');
        Route::post('/update_sahiplen_ilan_post/{id}', [AdminSahiplenIlanController::class, 'update_sahiplen_ilan_post'])->name('update_sahiplen_ilan_post');
        Route::post('/delete_sahiplen_ilan/{id}', [AdminSahiplenIlanController::class, 'delete_sahiplen_ilan'])->name('delete_sahiplen_ilan');
    });

    Route::prefix('/kayip_ilanlari')->middleware('auth')->group(function(){
        Route::get('/', [AdminKayipIlanController::class, 'kayip_ilanlari'])->name('kayip_ilanlari');
        Route::get('/update_kayip_ilan/{id}', [AdminKayipIlanController::class, 'update_kayip_ilan'])->name('update_kayip_ilan');
        Route::post('/update_kayip_ilan_post/{id}', [AdminKayipIlanController::class, 'update_kayip_ilan_post'])->name('update_kayip_ilan_post');
        Route::post('/delete_kayip_ilan/{id}', [AdminKayipIlanController::class, 'delete_kayip_ilan'])->name('delete_kayip_ilan');
    });

    Route::prefix('/es_bulma_ilanlari')->middleware('auth')->group(function(){
        Route::get('/', [AdminEsBulmaIlanController::class, 'es_bulma_ilanlari'])->name('es_bulma_ilanlari');
        Route::get('/update_es_bulma_ilan/{id}', [AdminEsBulmaIlanController::class, 'update_es_bulma_ilan'])->name('update_es_bulma_ilan');
        Route::post('/update_es_bulma_ilan_post/{id}', [AdminEsBulmaIlanController::class, 'update_es_bulma_ilan_post'])->name('update_es_bulma_ilan_post');
        Route::post('/delete_es_bulma_ilan/{id}', [AdminEsBulmaIlanController::class, 'delete_es_bulma_ilan'])->name('delete_es_bulma_ilan');
    });

    Route::get('/raporlar', [AdminRaporController::class, 'raporlar'])->name('raporlar');

    Route::prefix('/kullanicilar')->middleware('auth')->group(function(){
        Route::get('/', [AdminKullanicilarController::class, 'kullanicilar'])->name('kullanicilar');
        Route::post('/delete_kullanici/{id}', [AdminKullanicilarController::class, 'delete_kullanici'])->name('delete_kullanici');
    });

    Route::prefix('/veterinerler')->middleware('auth')->group(function(){
       Route::get('/', [AdminVeterinerlerController::class, 'veterinerler'])->name('veterinerler');
       Route::post('/delete_veteriner/{id}', [AdminVeterinerlerController::class, 'delete_veteriner'])->name('delete_veteriner');
    });

    Route::prefix('/yoneticiler')->middleware('auth')->group(function(){
        Route::get('/', [AdminYoneticilerController::class, 'yoneticiler'])->name('yoneticiler');
        Route::post('/delete_yonetici/{id}', [AdminYoneticilerController::class, 'delete_yonetici'])->name('delete_yonetici');
    });
});





Route::middleware('auth')->get('/profil',[ProfilController::class,'show_profil'])->name('profil');
Route::middleware('auth')->get('/profil/{id}',[ProfilController::class,'show_randevu'])->name('profil_show_randevu');
Route::middleware('auth')->get('/profil/s_ilan_onayla/{id}',[SayacController::class,'ekle_Sahiplen'])->name('S_ilanı_onayla');
Route::middleware('auth')->get('/profil/k_ilan_onayla/{id}',[SayacController::class,'ekle_Kayip'])->name('K_ilanı_onayla');
Route::middleware('auth')->get('/profil/e_ilan_onayla/{id}',[SayacController::class,'ekle_Es_bul'])->name('E_ilanı_onayla');


Route::get('/vet_register',function (){return view('auth/vet_register');})->name('vet_register');
Route::post('/vet_register_post',[VetRegisterController::class,'create'])->name('vet_register_post');

Route::post('/login',[LoginController::class, 'authenticated'])->name('login');
Route::post('/vet_login',[LoginController::class, 'vet_authenticated'])->name('vet_login');


Route::middleware('auth')->get('/Veteriner-randevu',[VeterinerRandevuController::class, 'index'])->name('veteriner_randevu_anasayfa');
Route::middleware('auth')->get('/Veteriner-randevu-1',[VeterinerRandevuController::class, 'elequenormindex'])->name('vet_index_orm');
Route::middleware('auth')->get('/Veteriner-randevu-alma/{id}/{tarih}',[VeterinerRandevuController::class,'show_vet'])->name('randevu_alma');
Route::middleware('auth')->get('/Veteriner-randevu-alma/{id}/{saat}/{tarih}/',[VeterinerRandevuController::class,'createRandevu'])->name('randevu_olustur');
Route::middleware('auth')->get('/Veteriner-randevu-success', function (){return view('/Veteriner_randevu/alinan_randevu');})->name('alinan_randev');
Route::middleware('auth')->get('/Randevu-iptal/{id}',[VeterinerRandevuController::class,'randevu_sil'])->name('randevu_sil_user');

Route::middleware([Veteriner::class])->get('/Veteriner-Dogrulama',[VeterinerController::class,'sertifika_kontrol'])->name('sertifika');
Route::middleware([Veteriner::class])->post('/Veteriner-Dogrulama_post',[VeterinerController::class,'sertifika'])->name('sertifika_post');

Route::middleware([Veteriner::class])->get('/Veteriner-Panel',[VeterinerController::class,'vet_anasayfa'])->name('Veteriner_anasayfa');
Route::middleware([Veteriner::class])->get('/Veteriner-Profil',function (){return view('Veteriner/Vet_profil');})->name('Vet_profil');
Route::middleware([Veteriner::class])->get('/Veteriner-Calisma-Saat',[VeterinerController::class,'calisma_form'])->name('Vet_calisma_form');
Route::middleware([Veteriner::class])->get('/Veteriner-uzmanlik',[VeterinerController::class,'uzmanlik_form'])->name('Vet_uzmanlik_form');
Route::middleware([Veteriner::class])->get('/Veteriner-Panel-randevu',[VeterinerController::class,'vet_randevular'])->name('Randevularim');
Route::middleware([Veteriner::class])->get('/Veteriner-Panel-gecmis-randevu',[VeterinerController::class,'vet_gecmis_randevular'])->name('Gecmis_Randevularim');

Route::middleware([Veteriner::class])->get('/Vet_calisma_form_post',[VeterinerController::class,'createCalisma'])->name('Vet_calisma_form_post');
Route::middleware([Veteriner::class])->get('/Vet_uzmanlik_form_post',[VeterinerController::class,'createUzmanlik'])->name('Vet_uzmanlik_form_post');
Route::middleware([Veteriner::class])->get("/Vet_randevu_onay/{id}",[VeterinerController::class,'randevu_onayla'])->name('randevu_onayla');
Route::middleware([Veteriner::class])->get("/Vet_randevu_sil/{id}",[VeterinerController::class,'randevu_sil'])->name('randevu_sil_vet');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


