<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand_id',
        'country_id',
        'transmisstion_id',
        'equipment_id',
        'seller_id',
        'emisstion_id',
        'registration_id',
        'engine_id',
        'powerhp_id',
        'powerkw_id',
        'mileage_id',
        'bodytype_id',
        'fueltype_id',
        'price_id',
        'colour_id',
        'damage_id',
    ];


    public function powerhp(){
        return $this->belongsTo(PowerHp::class);
    }
    public function powerkw(){
        return $this->belongsTo(PowerKw::class);
    }
    public function colour(){
        return $this->belongsTo(Colour::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function damage(){
        return $this->belongsTo(Damage::class);
    }
    public function emisstion(){
        return $this->belongsTo(Emisstion::class);
    }

}
