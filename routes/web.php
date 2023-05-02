<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('sahiplenme')->group(function (){

    Route::get('/', function (){
        return view('sahiplenmesayfasi');
    })->name('sahiplenmesayfasi');

    Route::get('/sahiplenilecek_hayvan' , function (){
        return view('sahiplenilecek_hayvan');
    })->name('sahiplenilecek_hayvan');

});




