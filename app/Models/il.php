<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class il extends Model
{
    use HasFactory;
    protected $table = 'iller';
    protected $fillable = [
        
      'id',
      'title',
    ];

    public function getSahiplen(){
        return $this->hasMany(Sahiplen::class,'il_id','id');
    }
}
