<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sahiplen extends Model
{
    use HasFactory;
    protected $table = 'sahiplen';
    public $timestamps = false;
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
        'created_date',
        'update_at',
    ];
    protected $dates = [
        'created_date',
        'updated_date',
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
