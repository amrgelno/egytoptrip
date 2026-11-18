<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Admin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    
        return[

             'id'=>$this->id,
            'username'=>$this->username,
            'email'=>$this->email,
            'pic'=>$this->pic,
            'created_at'=>$this->created_at->format('d/m/y'),
            'updated_at'=>$this->updated_at->format('d/m/y'),


            ];
}


//return $this->sendResponse(AdminResources::collection($Admin));


}