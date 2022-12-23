<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarRes;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $car = DB::table('cars')
            ->join('brands','brands.id','=','cars.brand_id')
            ->join('countries','countries.id','=','cars.country_id')
            ->select('cars.id','cars.name','cars.fuel_type','cars.mileage','cars.registration','cars.engine_size','cars.power','cars.body_type','cars.price','cars.colour','cars.damange','brands.name as brand','countries.name as country')
            ->get();
    
    return  CarResource::collection($car);

    // $cars = CarResource::collection(Car::get());
    // return $cars;
    // return response()->json([
    //     "error"=>false,
    //     "message"=>"cars lists",
    //     "data"=>$cars
    // ]);

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
        //return $request;
        $validator = $request->validate([
            "name"=>"required|string",
            "brand_id"=>"required|integer",
            "country_id"=>"required|integer",
            "transmisstion"=>"required|integer",
            "equipment_id"=>"required|integer",
            "seller_id"=>"required|integer",
            "emisstion_id"=>"required|integer",
            "fuel_type"=>"required|string",
            "mileage"=>"required",
            "registration"=>"required|string",
            "engine_size"=>"required|integer",
            "power"=>"required|integer",
            "body_type"=>"required|string",
            "price"=>"required",
            "colour"=>"required|string",
            "damange"=>"required|string",
        ]);

    $cars = Car::create($validator);
    return response()->json([
        "error"=>false,
        "emssage"=>"cars lists",
        "data"=>$cars,
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
