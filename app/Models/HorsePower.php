<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorsePower extends Model
{
    use HasFactory;
    protected $fillable = ['fromhp_id','tohp_id','fromkw_id','tokw_id','car_id'];

}
