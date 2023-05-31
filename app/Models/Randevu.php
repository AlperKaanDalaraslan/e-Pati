<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    protected $table = 'randevu';
    protected $fillable = [
        'randevu_id',
        'user_id',
        'vet_id',
        'randevu_saat',
        'randevu_tarih',
    ];
}
