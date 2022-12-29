<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerHp extends Model
{
    use HasFactory;
    protected $fillable = ['hp'];
    //protected $primaryKey = 'power_hp_id';
    //protected $with = ['cars'];
    public function cars(){
        return $this->hasMany(Car::class,'powerhp_id');
    }
    
}
