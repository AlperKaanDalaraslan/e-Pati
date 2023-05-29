<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ilceler extends Model
{
    use HasFactory;
    protected $table = 'ilceler';
    protected $fillable = [
        'il_id',
        'ilce_ad'
    ];
}
