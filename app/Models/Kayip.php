<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kayip extends Model
{
    use HasFactory;
    protected $table = 'kayip';

    protected $fillable = [
        'hayvan_image',
        'tur',
        'cinsiyet',
        'kayip_durumu',
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
