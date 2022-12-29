<?php

namespace App\Http\Controllers;

use App\Models\BodyType;
use Illuminate\Http\Request;

class BodyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return BodyType::get();
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

        $validator = $request->validate([
            "type"=>"required|string"
        ]);
        $data = BodyType::create($validator);
        return response()->json(["error"=>"false","message"=>"create success","data"=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function show(BodyType $bodyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function edit(BodyType $bodyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BodyType $bodyType,$id)
    {
        $data = [
           "type"=>$request->type
        ];
        $update = BodyType::where('id',$id)->update($data);
        return response()->json(["error"=>"false","message"=>"create success","data"=>$update]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BodyType $bodyType, $id)
    {
        $data = BodyType::where('id',$id)->delete();
        return response()->json(["error"=>"false","message"=>"delete success","data"=>$data]);
    }
}
