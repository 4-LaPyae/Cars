<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
            [
                'id' => $this->id,
                'name'=>$this->name,
                'brand'=>$this->brand,
                'country'=>$this->country,
                'transmisstion'=>$this->transmisstion,
                'equipment'=>$this->equipment,
                'seller'=>$this->seller,
                'standard'=>$this->standard,
                'fuel_type'=>$this->fueltype,
                'mileage'=>$this->mileage,
                'register_year'=>$this->register_year,
                'engine_size'=>$this->engine_size."cc",
                'powerhp'=>$this->powerhp."hp",
                'powerkw'=>$this->powerkw."kw",
                'body_type'=>$this->body_type,
                'price'=>"$ ".$this->price,
                'colour'=>$this->colour,
                'damage'=>$this->damage,
                ]     
        ;
    }
}
