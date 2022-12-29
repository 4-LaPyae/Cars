<?php

namespace App\Http\Controllers;

use App\Models\Emisstion;
use Illuminate\Http\Request;

class EmisstionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Emisstion::with(['cars'])->get();
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
            "standard"=>"required|string"
        ]);
        $emisstion = Emisstion::create($validator);
        return response()->json([
            "error"=>false,
            "message"=>"standard is created.",
            "data"=>$emisstion
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emisstion  $emisstion
     * @return \Illuminate\Http\Response
     */
    public function show(Emisstion $emisstion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emisstion  $emisstion
     * @return \Illuminate\Http\Response
     */
    public function edit(Emisstion $emisstion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emisstion  $emisstion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emisstion $emisstion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emisstion  $emisstion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emisstion $emisstion)
    {
        //
    }
}
