<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function index(){
        $model = request('model');
        $models = CarModel::when($model,function($q,$model){
                     $q->where("name","like","%$model%");
              })->get();
       //retur4n view('models.index',compact('models'));
       return $models;
    }
}
