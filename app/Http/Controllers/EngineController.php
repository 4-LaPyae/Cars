<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Engine::get();
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
            "size"=> "required|string"
        ]);
        $data = Engine::create($validator);
        return response()->json(["error"=>"false","message"=>"create success","data"=>$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Engine  $engine
     * @return \Illuminate\Http\Response
     */
    public function show(Engine $engine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Engine  $engine
     * @return \Illuminate\Http\Response
     */
    public function edit(Engine $engine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Engine  $engine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data=[
        "size"=>$request->size
       ];
      $update= Engine::where('id',$id)->update($data);
      return response()->json(["error"=>"false","message"=>"update success","data"=>$update],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Engine  $engine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = Engine::where('id',$id)->delete();
      return response()->json(["error"=>"false","message"=>"delete success","data"=>$delete],200);
    }
}
