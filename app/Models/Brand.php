<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $hidden = [
        'created_at','updated_at'
    ];
    //protected $with = ['models'];
    protected $appends = [
        'modelCount'
    ];
    public function models(){
        return $this->hasMany(CarModel::class);
    }
    public function getModelCountAttribute(){
        return $this->models()->count();
    }
    
}
