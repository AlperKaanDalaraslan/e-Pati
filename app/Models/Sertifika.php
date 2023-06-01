<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifika extends Model
{
    protected $table = 'sertifika';
    protected $fillable = [
        'sertifika_img',
        'vet_id',
    ];
    use HasFactory;
}
