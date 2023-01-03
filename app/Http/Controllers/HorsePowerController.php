<?php

namespace App\Http\Controllers;

use App\Models\HorsePower;
use Illuminate\Http\Request;

class HorsePowerController extends Controller
{
    public function index( ){
        return HorsePower::select('horse_powers.*','powers.hp','powers.kw')
                           ->leftJoin('powers','powers.id','horse_powers.fromhp_id','horse_powers.tohp_id','horse_powers.fromkw_id','horse_powers.tokw_id',)
                           ->get();
    }
    public function store(Request $request){
        // return $request;
        $validator = $request->validate([
            "fromhp_id"=>"required|string",
            "tohp_id"=>"required|string",
            "fromkw_id"=>"required|string",
            "tokw_id"=>"required|string",
            "car_id"=>"required"
        ]);
        // return $validator;
        $data = HorsePower::create($validator);
        return response()->json([
            "error"=>"false",
            "message"=>"create success",
            "data"=>$data
        ]);
    }
}
