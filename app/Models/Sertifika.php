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

    public function getUser(){
        return $this->hasOne(User::class,'vet_id','id');
    }
    public function getVeteriner(){
        return $this->hasOne(Veteriner::class,'vet_id','vet_id')->with('getUser');
    }


}
