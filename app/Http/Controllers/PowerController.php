<?php

namespace App\Http\Controllers;

use App\Models\Power;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PowerController extends Controller
{
    public function index(){
        return Power::get();
    }
    public function store(Request $request){
        $validator = $request->validate([
            "hp"=>"required|string",
            "kw"=>"required|string"
        ]);
       $data = Power::create($validator);
       return response()->json([
        "error"=>"false",
        "message"=>"create success",
        "data"=>$data
       ]);
    }
}
