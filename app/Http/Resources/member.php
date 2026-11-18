<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class member extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {



return[

'id'=>$this->id,
'username'=>$this->username,
'email'=>$this->email,
'mobile'=>$this->mobile,
'Distantion'=>$this->Distantion,
'country'=>$this->country,
'prof_pic'=>$this->prof_pic,
'cover_pic'=>$this->cover_pic,
'facebook'=>$this->facebook,
'instgram'=>$this->instgram,
'olx'=>$this->olx,

];



    }
}
