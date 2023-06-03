<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haber extends Model
{
    use HasFactory;

    protected $table = 'haber';
    protected $fillable = [
        'user_id',
        'haber_image',
        'haber_baslik',
        'haber_icerik',
    ];

    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
