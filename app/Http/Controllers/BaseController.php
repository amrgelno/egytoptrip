<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function   sendResponse($result,$massage,$status=200){



        $response = [

'success'=>true,
'data'=>$result,
'massage'=>$massage

        ];


        return   response()->json($response,$status);



    }



    public function   sendError($error,$errorMessage=[],$status=404){



        $response = [

'success'=>false,
'data'=>$error,

        ];

if(!empty($errorMessage)){


    $response['data']=$errorMessage;


}



        return   response()->json($response ,$status);



    }





}