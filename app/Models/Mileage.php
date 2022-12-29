<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mileage extends Model
{
    use HasFactory;
    protected $fillable=[
        "mile"
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
