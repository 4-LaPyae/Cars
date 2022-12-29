<?php

namespace App\Http\Controllers;

use App\Models\Mileage;
use Illuminate\Http\Request;

class MileageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mileage::with(['cars'])->get();
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
        $validator=$request->validate([
            "mile"=>"required|string"
        ]);
        $data = Mileage::create($validator);
        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function show(Mileage $mileage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mileage $mileage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mileage $mileage , $id)
    {
      $data = [
         "mile"=>$request->mile
      ];
      $update = Mileage::where('id',$id)->update($data);
      return response()->json(["error"=>"false","message"=>"update success","data"=>$update]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mileage $mileage,$id)
    {
       $delete = Mileage::where('id',$id)->delete();
       return response()->json(["error"=>"false","message"=>"delete success","data"=>$delete]);
    }
}
