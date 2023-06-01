<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    protected $table = 'randevu';
    protected $primaryKey = 'randevu_id';

    protected $fillable = [
        'randevu_id',
        'user_id',
        'vet_id',
        'randevu_saat',
        'randevu_tarih',
    ];

    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function getVeteriner()
    {
        return $this->belongsTo(Veteriner::class, 'vet_id', 'vet_id')->with('getUser');
    }

}
