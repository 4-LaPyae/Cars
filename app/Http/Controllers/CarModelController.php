<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModelResource;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarModelController extends Controller
{

    public function index(){
        $model = request('model');
        $models = CarModel::when($model,function($q,$model){
                     $q->where("name","like","%$model%");
              })->get();
        return $model;
       //retur4n view('models.index',compact('models'));
        // $model = request('model');
        // $models = CarModel::when($model,function($q,$model){
        //              $q->where("name","like","%$model%");
        //       })->get();
       
    }
}
