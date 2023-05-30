<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tur extends Model
{
    use HasFactory;
    protected $table = 'tur';
    protected $fillable = [
        'tur_ad',
        ];


}
