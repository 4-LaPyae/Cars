<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emisstion extends Model
{
    use HasFactory;
    protected $fillable=['standard'];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
