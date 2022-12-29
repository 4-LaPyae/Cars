<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerKw extends Model
{
    use HasFactory;
    protected $fillable = ["kw"];

    public function cars(){
        return $this->hasMany(Car::class,'powerkw_id');
    }
}
