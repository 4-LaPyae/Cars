<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable=[
        "price"
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
