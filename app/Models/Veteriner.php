<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veteriner extends Model
{
    use HasFactory;
    protected $table = 'veteriner';
    protected $fillable = [
        'vet_id',
        'klinik_ad',
        'il_id',
        'ilce',
        'adres',
        'onay',
    ];


    public function getUser(){
        return $this->hasOne(User::class,'id','vet_id');
    }
    public function getUzmalik(){
        return $this->hasOne(Vet_uzmanlik::class,'vet_id','vet_id');
    }
    public function getCalisma(){
        return $this->hasOne(Vet_calisma::class,'vet_id','vet_id');
    }
    public function getIL(){
        return $this->belongsTo(il::class,'il_id','id');
    }




}
