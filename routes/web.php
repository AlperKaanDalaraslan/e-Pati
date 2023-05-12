<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SahiplendirmeController;

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

Route::prefix('sahiplenme')->middleware('auth')->group(function (){

    Route::get('/', function (){
        return view('sahiplenmesayfasi');
    })->name('sahiplenmesayfasi');

    Route::get('/sahiplenilecek_hayvan' , function (){
        return view('sahiplenilecek_hayvan');
    })->name('sahiplenilecek_hayvan');

    Route::get('/sahiplenme_ilan_ver' , function (){
        return view('sahiplendirme_ilan_form');
    })->name('sahiplendirme_ilan_form');

});

Route::prefix('kayip')->middleware('auth')->group(function (){

    Route::get('/', function (){
        return view('kayip_ilan_sayfasi');
    })->name('kayip_ilan_sayfasi');

    Route::get('/kayip_ilan_ver', function (){
        return view('kayip_ilan_form');
    })->name('kayip_ilan_form');

    Route::get('/kayip_hayvan', function (){
        return view('kayip_hayvan');
    })->name('kayip_hayvan');


});
Route::prefix('es_bulma')->middleware('auth')->group(function (){

    Route::get('/', function (){
        return view('es_bulma_sayfasi');
    })->name('es_bulma_sayfasi');

    Route::get('/es_ilan_ver', function (){
        return view('es_ilan_form');
    })->name('es_ilan_form');

    Route::get('/es_bulma_hayvan', function (){
        return view('es_bulma_hayvan');
    })->name('es_bulma_hayvan');


});

Route::middleware('auth')->get('/profil', function (){
    return view('profil');
})->name('profil');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
