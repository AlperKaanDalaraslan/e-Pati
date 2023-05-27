<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet_calisma extends Model
{
    use HasFactory;
    protected $table = 'vet_calisma';
    protected $fillable = [
        'vet_id' ,
        'randevu_bas',
        'randevu_bit',
        'randevu_aralik',
        'dahiliye',

    ];
    public function getVeteriner(){
        return $this->hasOne(Veteriner::class,'vet_id','vet_id');
    }
}
