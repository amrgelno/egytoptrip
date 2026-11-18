<?php

namespace App\Http\Controllers;
use App\Models\nav ;
use App\Models\view ;
use App\Models\seo ;
use App\Models\box ;
use App\Models\cover ;
use App\Models\topic ;
use App\Models\paragraph ;


use Illuminate\Http\Request;

class newtopic extends Controller
{
    
    public function index(Request $request)
    {

        $page_id=$request->MainM_ID;
        $box_id=$request->box_ID;
        $Topic_id=$request->Topic_ID;


        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 



    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ; 

    }

if(isset($page_id)){


return view('Admin.Auth.newtopic',[
         
    'navID' => $page_id ,
    'Domain_site' => $Domain_site        
    
 ]);


}elseif(isset($box_id)){


   /* start Automation */
 
    
    $box=box::where('ID',$box_id)->get();


    foreach($box as   $boxitem){


$BOX_STYLE =$boxitem->BOX_STYLE; 


    }

    if ( $BOX_STYLE =='BoxModel6'){

    $cover=cover::where('box_id',$box_id)->get();
    $countcover=count($cover);

    if($countcover==0){

        cover::create([

            'cover_title' =>$request->cover_title,

            'box_id' => $box_id,

            'Cover_Name'=>'Tumbnail.jpg'

            ]);       
    }

    
    $paragraph=paragraph::where('box_id',$box_id)->get();
    $countparagraph=count($paragraph);

    if($countparagraph==0){

        paragraph::create([

            'Paragraph'=>'Lorem Ipsum dolor sit amet, consectetur adipsicing.',

            'box_id' => $box_id,


            ]);       
    }



    $topic=topic::where('box_id',$box_id)->get();
    $counttopic=count($topic);


    if($counttopic==0){

    $subject=['Description','Inclusion','Exclusion','TourMap'];

    for ($i = 0; $i<4; $i++)    {

    topic::create([

        'content'=>'Lorem Ipsum dolor sit amet, consectetur adipsicing.',

        'box_id' => $box_id,

        'subject' =>$subject[$i],

        'ImageName' =>'Tumbnail.jpg' ,

         'Topic_style'=>'AccordionPanel'


        ]);



    

    }    

    }

    }


    /* END Automation */


    $view=view::whereRaw("ID = (select Max(id) from view )")->get();

    foreach ($view as $viewitem){

      $BusinessModel = $viewitem->BusinessModel ; 
    
     }




    return view('Admin.Auth.newtopic',[
         
        'box_ID' => $box_id ,  
        'BusinessModel' => $BusinessModel ,  //  for Ecommerce product
        'Domain_site' => $Domain_site        
      
        
     ]);


}else{

    return view('Admin.Auth.newtopic',[
         
        'Topic_ID' => $Topic_id ,  
        'Domain_site' => $Domain_site        
      
        
     ]);



}

    


    }
}