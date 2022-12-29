<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use Illuminate\Http\Request;
use App\Http\Resources\CarRes;
use App\Http\Resources\CarResource;



class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FuelType::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator=$request->validate([
            "name"=>"required|string"
        ]);
        $data = FuelType::create($validator);
        return response()->json(["error"=>"false","message"=>'create success','data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function show(FuelType $fuelType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelType $fuelType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelType $fuelType ,$id)
    {

        $data = [
            "name"=>$request->name
        ];
       $fuel = FuelType::where('id',$id)->update($data);
       return response()->json(["error"=>"false","message"=>"update success","data"=>$fuel],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelType $fuelType,$id)
    {
      $data = FuelType::where('id',$id)->get();
      $delete = FuelType::where('id',$id)->delete();
      return response()->json(["error"=>"false","message"=>"delete success","data"=>$delete],200);
    }
}
