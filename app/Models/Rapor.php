<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    use HasFactory;
    protected $table = 'rapor';
    protected $fillable = [
        'ilan_tur',
        'ilan_id',
        'raporlayan_id',
        'rapor_nedeni',
    ];

}
