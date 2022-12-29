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
        //return Car::get();
        $keyword = request("keyword");
     $cars = DB::table('cars')
            ->leftJoin('brands','brands.id','=','cars.brand_id')
            ->leftJoin('countries','countries.id','=','cars.country_id')
            ->leftJoin('transmisstions','transmisstions.id','=','cars.transmisstion_id')
            ->leftJoin('equipment','equipment.id','=','cars.equipment_id')
            ->leftJoin('sellers','sellers.id','=','cars.seller_id')
            ->leftJoin('emisstions','emisstions.id','=','cars.emisstion_id')
            ->leftJoin('power_hps','power_hps.id','=','cars.powerhp_id')
            ->leftJoin('power_kws','power_kws.id','=','cars.powerkw_id')
            ->leftJoin('fuel_types','fuel_types.id','=','cars.fueltype_id')
            ->leftJoin('registrations','registrations.id','=','cars.registration_id')
            ->leftJoin('engines','engines.id','=','cars.engine_id')
            ->leftJoin('prices','prices.id','=','cars.price_id')
            ->leftJoin('colours','colours.id','=','cars.colour_id')
            ->leftJoin('damages','damages.id','=','cars.damage_id')
            ->leftJoin('mileages','mileages.id','=','cars.mileage_id')
            ->leftJoin('body_types','body_types.id','=','cars.bodytype_id')
            ->select('cars.*','brands.name as brand',
            'countries.name as country','transmisstions.name as transmisstion',
            'equipment.name as equipment','sellers.name as seller','emisstions.standard as standard',
            'power_hps.hp as powerhp','power_kws.kw as powerkw','fuel_types.name as fueltype','engines.size as engine_size',
            'registrations.year as register_year','prices.amount as price','colours.name as colour',
            'damages.name as damage','mileages.mile as mileage','body_types.type as body_type')
            ->get();

       //return $cars;
        // $cars = Car::when($keyword,function($q,$keyword){
        //     $q->where("name","like","%$keyword%");
        // })->get();
        //return $results;
       // return view('carlists.index',compact('cars'));
    //return view('carlists.index',compact('cars'));
    //return  CarResource::collection($car);

     $carlists = CarResource::collection($cars);
    // return $cars;
    return response()->json([
        "error"=>false,
        "message"=>"cars lists",
        "data"=>$carlists
    ]);

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
            "transmisstion_id"=>"required|integer",
            "equipment_id"=>"required|integer",
            "seller_id"=>"required|integer",
            "emisstion_id"=>"required|integer",
            "fueltype_id"=>"required|integer",
            "mileage_id"=>"required",
            "registration_id"=>"required|integer",
            "engine_id"=>"required|integer",
            "powerhp_id"=>"required|integer",
            "powerkw_id"=>"required|integer",
            "bodytype_id"=>"required|integer",
            "price_id"=>"required|integer",
            "colour_id"=>"required|integer",
            "damage_id"=>"required|integer",
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
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $car = Car::findOrFail($id);
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
        $car->update($validator);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $car = Car::findOrFail($id); 
         $car->delete();       
    }
}
