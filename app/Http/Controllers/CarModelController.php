<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ModelResource;

class CarModelController extends Controller
{
    public function index(){

        // $model = request('model');
        // $models = CarModel::when($model,function($q,$model){
        //              $q->where("name","like","%$model%");
        //       })->get();
        $models = CarModel::select('car_models.*')
                    ->join('brands','brands.id','=','car_models.brand_id')
                    ->get();
                    return $models;
    $counts =  $models->count();
   return  ModelResource::collection($counts);
       //retur4n view('models.index',compact('models'));
       return $models;
    }

    public function store(Request $request){
        $validator = $request->validate([
            "name"=>"required",
            "brand_id"=>"required"
        ]);
        // return $validator;
       $data= CarModel::create($validator);
       return response()->json(
        [
            "error"=>"false",
            "message"=>"create success",
            "data"=>$data
        ],200
       );
    }
    public function update(Request $request,$id){
        $validator = $request->validate([
            "name"=>"required",
            "brand_id"=>"required"
        ]);
        $data = CarModel::where('id',$id)->update($validator);
        return response()->json(
            [
                "error"=>"false",
                "message"=>"update success",
                "data"=>$data
            ],200
           );
       }
       public function destroy($id){

        $delete = CarModel::where('id',$id)->delete();
        return response()->json(
            [
                "error"=>"false",
                "message"=>"delete success",
                "data"=>$delete
            ],200
           );
       }
}

