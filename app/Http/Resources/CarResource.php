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
        return [
            
                'id' => $this->id,
                'name'=>$this->name,
                'brand'=>$this->brand,
                'country'=>$this->country,
                'fuel_type'=>$this->fuel_type,
                'mileage'=>$this->mileage,
                'registration'=>$this->registration,
                'engine_size'=>$this->engine_size."cc",
                'power'=>$this->power."hp",
                'body_type'=>$this->body_type,
                'price'=>"$".$this->price,
                'colour'=>$this->colour,
                'damage'=>$this->damange,
            
            
        ];
    }
}
