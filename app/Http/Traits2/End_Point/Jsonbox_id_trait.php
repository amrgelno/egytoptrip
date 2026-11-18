<?php

namespace App\Http\Traits\End_Point;
use App\Models\member;
use App\Models\Admin;
use App\Models\cover;
use App\Models\paragraph ;
use App\Models\social ;
use App\Models\topic ;
use App\Models\forms ;
use App\Models\keywords ;
use App\Models\company;
use App\Models\video ;
use App\Models\box;
use App\Models\faqs;
use App\Models\fpforms;
use App\Models\SNumbers ;
use App\Models\nav ;
use App\Models\marque;
use App\Models\slider;
use App\Models\searchbar;
use App\Models\seo ;
use App\Models\fav_product;
use App\Models\member_pr;
use App\Models\gallery;

use Illuminate\Http\Request;

Trait  Jsonbox_id_trait
{

    public function fxbox_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir,$Destinations,$City,$Price,$Duration,$GroupSize){


        $member_pr=member_pr::where('Box_ID',$box_id)->get();

        if (!empty($member_pr)){

          $member_pr;

        }else{

          $member_pr=0;

        }

        $clientIP=request()->ip();

        $cover=cover::where('box_id',$box_id)->get();







/* Automation */

        $box=box::where('ID',$box_id)->get();


        foreach($box as   $boxitem){


    $BOX_STYLE =$boxitem->BOX_STYLE;


        }

        if ( $BOX_STYLE =='BoxModel6'){

        $cover=cover::where('box_id',$box_id)->get();
        $countcover=count($cover);

        if($countcover==0){

            cover::create([

                'cover_title' =>'Lorem Ipsum dolor sit amet, consectetur adipsicing.',

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

   if(!empty($Destinations) && empty($City) && $Destinations<>'Any' ){

    $box=box::where('box_id',$box_id)->where('Country',$Destinations)->get();

}elseif(!empty($Destinations) && !empty($City) && $Destinations<>'Any' ){

    $box=box::where('box_id',$box_id)->where('Country',$Destinations)->where('City',$City)->get();


    }elseif(!empty($Price)){


        $box=box::where('box_id',$box_id)->where('Price',$Price)->get();



    }elseif(!empty($Duration)){


        $box=box::where('box_id',$box_id)->where('Duration',$Duration)->get();


    }elseif(!empty($GroupSize)){


        $box=box::where('box_id',$box_id)->where('GroupSize',$GroupSize)->get();


    }else{

        $box=box::where('box_id',$box_id)->get();

    }



    $packageDetails=box::where('ID',$box_id)->get();


        $boxbreadcrumb=box::where('ID',$box_id)->get();

        foreach($boxbreadcrumb as  $breadcrumbitem ){

        $cat_type=$breadcrumbitem->cat_type;

        $page_title=$breadcrumbitem->title;


        }

        $marque=marque::where('nav_id',1)->get();

        $static=SNumbers::where ('box_id',$box_id)->get();

        $paragraph=paragraph::where ('box_id',$box_id)->get();

       $Keywords=keywords::where ('box_id',$box_id)->get();

       // $company=company::where ('nav_id',1)->get();


        $topic=topic::where ('box_id',$box_id)->get();

         $social=social::get();

         $gallery=gallery::get();

         $Maxcompany_id=company::Max('id')->get();

          $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

          $slider=slider::where('box_id',$box_id)->get();

          $faqs=faqs::where ('box_id',1)->get();

          $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')-> where('box_id',$box_id) ->get();

          $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')-> where('box_id',$box_id)->get();

          $fpforms=fpforms::where ('nav_id',$page_id)->get();


         $navNullfooter=nav::where('footer',NULL)->get();

       //nav-optimize
          $nav=nav::where('parent_id',NULL)->where('SUBMENUID',NULL)->get();

          $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

         $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

        $countnav = count($nav);




         $All='{
          "themes":'.$themes.',
          "member_pr": '.$member_pr.',
          "social": '.$social.',
          "Maxcompanyid": '.$Maxcompanyid.',
          "navNullfooter": '.$navNullfooter.',
          "Keywords":'.$Keywords.',
          "nav": '.$nav.',
          "nav_sub":'.$nav_sub.',
          "nav_subm":'.$nav_subm.',
          "topic":'.$topic.',
          "box":'.$box.',
          "faqs":'. $faqs.',
          "packageDetails": '.$packageDetails.',
          "cover":'.$cover.',
          "marque":'.$marque.',
          "paragraph":'.$paragraph.',
          "sliderMin":'.$sliderMin.',
          "sliderMax":'.$sliderMax.',
          "slider":'.$slider.',
          "static":'.$static.',
          "cat_type": "'.$cat_type.'",
          "page_title": "'.$page_title.'",
          "BSModel": "'.$BusinessModel.'",
          "Domain_site": "'.$Domain_site.'",
          "container": "'.$container.'",
          "bgimage": "'.$bgimage.'",
          "Microformats": "'.$Microformats.'",
          "Breadcrumbs": "'.$Breadcrumbs.'",
          "Footersitemap": "'.$Footersitemap.'",
          "inspector": "'.$inspector.'",
          "langsection": "'.$langsection.'",
          "pg_dir": "'.$pg_dir.'",
          "SearchBar": "'.$SearchBar.'",
          "fpforms":"'.$fpforms.'",
          "navID" : "'.$page_id.'",
          "box_ID" : "'.$box_id.'",
          "Topic_ID" : "'.$Topic_id.'",
          "lang":"'. $lang.'",
          "member":"'. $member.'",
          "member_user" : "'. $member_user.'",
          "member_id" :"'. $member_id.'",
          "fav_product":"'. $fav_product.'",
         "count_fav_product":"'. $count_fav_product.'",
         "Admin_user":"'. $Admin_user.'",
            "gallery":'.$gallery.'



        }';




       if( $countnav > 0){

        return $All;

       }




    }




}



?>
