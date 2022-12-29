<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use App\Models\Brands;
use App\Models\Car;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $brands = Brand::get();
        return response()->json([
            "error"=>false,
            "messagge"=>"brands lists",
            "data"=>$brands
        ]);
        $brand = request('make');
        $brands = Brand::when($brand,function($q,$brand){
                     $q->where("name","like","%$brand%");
              })->get();
        //return $brand;
         $brands = BrandResource::collection($brands);

    //    $brands = DB::table('brands')
    //                 ->leftJoin('car_models','car_models.brand_id','=','brands.id')
    //                 ->select('brands.name','car_models.name as model_name')
    //                 ->get();
    // return $brands;
        //return BrandResource::collection($brands);
       // return Brand::where('id',1)->get();
        //dd($brands);
        //return $brands;
        // $brand = request('brand');
        // $brand = Brands::when($brand,function($q,$brand){
        //          $q->where("name","like","%$brand%");
        //      })->get();
        // return $brand;
        //return view('brands.index',compact('brands'));
        return response()->json([
            "error"=>false,
            "message"=>"brand lists",
            "data"=>$brands
        ]);
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
        $brands = Brand::create($validator);
        return response()->json([
            "error"=>false,
            "message"=>"brand is created.",
            "data"=>$brands
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $data = [
        "brand"=>$brand->name,
        "models"=>$brand->models
        ];
       return response()->json([
        "error"=>false,
        "message"=>"detail",
        "data"=>$data,
       ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brands)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brands,$id)
    {
        $data=[
            "name"=>$request->name
        ];
        $update=Brand::where('id',$id)->update($data);
        return response()->json([
            "error"=>false,
            "message"=>"brand is updated.",
            "data"=>$update
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Brand::where('id',$id)->delete();
        return response()->json([
            "error"=>false,
            "message"=>"brand is deleted",
            "data"=>$delete
        ]);
    }

}
