<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayac extends Model
{
    use HasFactory;
    protected $table = 'sayac';
    protected $fillable = [
        'randevu',
        'sahiplen',
        'kayip',
        'es_bul',
    ];
}
