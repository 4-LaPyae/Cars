<?php

namespace App\Http\Controllers;

use App\Models\Transmisstion;
use Illuminate\Http\Request;

class TransmisstionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transmisstion::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
            "name"=>"required|string"
        ]);
        $transmisstion = Transmisstion::create($validator);
        return response()->json([
            "error"=>false,
            "message"=>"transmission is created.",
            "data"=>$transmisstion
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transmisstion  $transmisstion
     * @return \Illuminate\Http\Response
     */
    public function show(Transmisstion $transmisstion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transmisstion  $transmisstion
     * @return \Illuminate\Http\Response
     */
    public function edit(Transmisstion $transmisstion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transmisstion  $transmisstion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transmisstion $transmisstion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transmisstion  $transmisstion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmisstion $transmisstion)
    {
        //
    }
}
