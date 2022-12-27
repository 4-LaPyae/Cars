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
        'transmisstion',
        'equipment_id',
        'seller_id',
        'emisstion_id',
        'fuel_type',
        'mileage',
        'registration',
        'engine_size',
        'powerhpfrom_id',
        'powerhpto_id',
        'powerkwfrom_id',
        'powerkwto_id',
        'mileagefrom_id',
        'mileageto_id',
        'body_type',
        'price',
        'colour',
        'damange',
    ];

    protected function price()
    {
        return Attribute::make(
            get: fn ($value) => $value . "MMK",
        );
    }

}
