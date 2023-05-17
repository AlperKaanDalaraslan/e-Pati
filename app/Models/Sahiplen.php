<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sahiplen extends Model
{
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
    protected $table = 'sahiplen';

    use HasFactory;
}
