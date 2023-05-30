<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Es_bul extends Model
{
    use HasFactory;
    protected $table = 'es_bulma';

    Protected $fillable = [
        'hayvan_image',
        'hayvan_ad',
        'tur',
        'cins',
        'cinsiyet',
        'yas',
        'kisirlik_durumu',
        'il_id',
        'ilce',
        'adres',
        'aciklama',
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function getIL(){
        return $this->belongsTo(il::class, 'il_id', 'id');
    }

    public function getTur(){
        return $this->belongsTo(Tur::class, 'tur' , 'id');
    }
}
