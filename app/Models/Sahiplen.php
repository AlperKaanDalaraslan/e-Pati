<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sahiplen extends Model
{
    use HasFactory;
    protected $table = 'sahiplen';
    protected $fillable = [
        'hayvan_image',
        'hayvan_ad',
        'tur',
        'cins',
        'cinsiyet',
        'yas',
        'kisir',
        'kuduz',
        'karma',
        'parazit',
        'kalp_kurtlari',
        'cip_no',
        'il_id',
        'ilce',
        'adres',
        'aciklama',
    ];



    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getIL(){
        return $this->belongsTo(il::class,'il_id','id');
    }

}
