<?php

namespace App\Http\Controllers;

use update;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Price::with(['cars'])->get();
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
            "price"=>"required"
        ]);
       $data= Price::create($validator);
       return response()->json(["error"=>"false","message"=>"create success","data"=>$data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
   //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $data = [
            "price"=>$request->price
        ];

       $price = Price::where('id',$id)->update($data);
       return response()->json(["error"=>"false","message"=>"update success","data"=>$price],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $delete = Price::where('id',$id)->delete();
       return response()->json(["error"=>"false","message"=>"delete success","data"=>$delete],200);
    }
}
