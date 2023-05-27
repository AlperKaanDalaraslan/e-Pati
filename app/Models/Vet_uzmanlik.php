<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet_uzmanlik extends Model
{
    use HasFactory;
    protected $table = 'vet_uzmanlik';
    protected $fillable = [
        'ceraahi' ,
        'muayene',
        'teshis',
        'kuafor',
        'dahiliye',
        'lab',
        'muayene',
        'koruyucu_hekim',
        'rontgen',
        'yoğun_bakım',
    ];
    public function getVeteriner(){
        return $this->hasOne(Veteriner::class,'vet_id','vet_id');
    }
}
