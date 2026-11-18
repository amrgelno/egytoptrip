<?php

namespace App\Http\Controllers\Api;
use App\Models\fav_product;
use App\Http\Controllers\Controller;
use App\Http\Traits\Basecontroller;
//use App\Http\Controllers\BaseController  as   BaseController   ;    //class Fav_Ads extends BaseController
use Illuminate\Http\Request;
use App\Http\Resources\Fav_ads  as   Fav_adsResources   ;



class Fav_Ads extends Controller
{


//  crudJ   (Creat ,  Read , update ,  Delete  , Build json )   // Read   (Blade With vuejs  or   Blade  )
use  Basecontroller;

public function json(){

$Fav_ads2=fav_product::get();


$Fav_ads=fav_product::where('id', '17')->get();

//return   response()->json($Fav_ads);    // return json

// return   response()->json([

//  'success'=>true,
//   'status '=>'200 ',
//  'Favads'=>$Fav_ads]);


$result =response()->json(['Favads'=>Fav_adsResources::collection($Fav_ads),'Favads2'=>$Fav_ads]);

//return $result ;

$Response= $this->sendResponse($result ,'success');   // Base controller    testing


return   $Response;

//return  $Fav_ads;   // return json
//return $this->sendResponse(new Fav_adsResources($Fav_ads),'success');    // return custom  json
//return $this->sendResponse(Fav_adsResources::collection($Fav_ads),'success');    // return custom  json
//return view('Favads',compact($Fav_ads));


}


public function index(Fav_ads  $Fav_ads ){

    return view('Favads',compact($Fav_ads));

}

}
