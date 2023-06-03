<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kayip extends Model
{
    use HasFactory;
    protected $table = 'kayip';
    public $timestamps = false;

    protected $fillable = [
        'hayvan_image',
        'hayvan_ad',
        'tur',
        'cinsiyet',
        'kayip_durumu',
        'il_id',
        'ilce',
        'adres',
        'aciklama',
        'created_date',
        'update_at',
    ];



    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getIL(){
        return $this->belongsTo(il::class,'il_id','id');
    }

    public function getTur(){
        return $this->belongsTo(Tur::class, 'tur' , 'id');
    }


}
