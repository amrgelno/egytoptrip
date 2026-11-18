<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Modelname extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return parent::toArray($request);    //return any model with json

    }
//return $this->sendResponse(memberResources::collection($member));     Retireve  collection of models  ($member,$Admin)


//return $this->sendResponse(new memberResources($member));         Retireve  one  Model

}