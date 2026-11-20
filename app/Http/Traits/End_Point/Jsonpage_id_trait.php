<?php

namespace App\Http\Traits\End_Point;
use App\Models\member;
use App\Models\Admin;
use App\Models\cover;
use App\Models\paragraph ;
use App\Models\social ;
use App\Models\topic ;
use App\Models\forms ;
use App\Models\fpforms;
use App\Models\keywords ;
use App\Models\company;
use App\Models\video ;
use App\Models\box;
use App\Models\SNumbers ;
use App\Models\nav ;
use App\Models\marque;
use App\Models\slider;
use App\Models\searchbar;
use App\Models\fav_product;
use App\Models\member_pr;
use App\Models\gallery;
use App\Models\client_comment;



Trait  Jsonpage_id_trait
{

    public function fxpage_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir ){

         $cover=cover::where('nav_id',$page_id)->get();

        $marque=marque::where('nav_id',1)->get();

         $static=SNumbers::where ('nav_id',$page_id)->get();

         $paragraph=paragraph::where ('nav_id',$page_id)->get();

        $Keywords=keywords::where ('nav_id',$page_id)->get();

        // $company=company::where ('nav_id',1)->get();



         $Allpackages=box::where ('BOX_STYLE','BoxModel6')->get();    // Hot Deal Query


         $box=box::where ('nav_id',$page_id)->get();

 $boxMax=box::where('BOX_STYLE' , '=','BoxModel3')->where ('nav_id',$page_id)->whereRaw("id = (select Max(id) from boxes where  BOX_STYLE='BoxModel3'  and  nav_id='$page_id' )")->get();

$boxMin=box::where ('BOX_STYLE' ,'=', 'BoxModel3')->where ('nav_id',$page_id)->whereRaw("id < (select Max(id) from boxes  where BOX_STYLE='BoxModel3'  and  nav_id='$page_id')")->limit(5)->get();

$boxIDMin=box::where('BOX_STYLE' , '=','BoxModel3')->whereRaw("id = (select Min(id) from boxes  where  BOX_STYLE='BoxModel3' and  nav_id='$page_id' )")->get()??' ';

foreach ($boxIDMin as $Minitem){


    $boxMinID = $Minitem->ID ;






   }




   $boxMinID ='';





   $client_commentMax=client_comment::where ('status','Active')->whereRaw('id = (select Max(id)from client_comment where  status="Active" )')->get();

    $client_commentMin=client_comment::where ('status','Active')->whereRaw('id < (select Max(id)from client_comment where  status="Active")')->get();

    $client_commentIDMin=client_comment::where('status','Active')->whereRaw('id = (select Min(id)from client_comment  where  status="Active" )')->get();

    foreach ($client_commentIDMin as $client_commentitem){

      $commentMinID = $client_commentitem->ID ;

     }

         $topic=topic::where ('nav_id',$page_id)->get();

          $social=social::get();

          $gallery=gallery::get();

          $Maxcompany_id=company::Max('id');

           $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

           $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

           $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

           $slider=slider::where ('nav_id',1)->get();

           $fpforms=fpforms::where ('nav_id',$page_id)->get();


           // $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->where('nav_id',$page_id)->get();

           // $sliderMax=slider::whereRaw('id > (select Min(id)from sliders )')->where('nav_id',$page_id)->get();

           // $slider=slider::where ('nav_id',$page_id)->get();




           // $slider=slider::where ('nav_id',$page_id)->get();

          $navNullfooter=nav::where('footer',NULL)->get();

        //nav-optimize
           $nav=nav::where('parent_id',NULL)->where('SUBMENUID',NULL)->get();

           $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

          $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

         $countnav = count($nav);


         $navbreadcrumb=nav::where('id',$page_id)->get();


         foreach($navbreadcrumb as  $breadcrumbitem ){

          $navname=$breadcrumbitem->sub1menu;


          }



          $All='{
            "themes":'.$themes.',
            "gallery":'.$gallery.',
             "social": '.$social.',
             "Maxcompanyid": '.$Maxcompanyid.',
             "navNullfooter": '.$navNullfooter.',
             "nav": '.$nav.',
             "Keywords":'.$Keywords.',
             "nav_sub":'.$nav_sub.',
             "nav_subm":'.$nav_subm.',
             "topic":'.$topic.',
             "box":'.$box.',
             "Allpackages":'.$Allpackages.',
             "boxMax":'.$boxMax.',
             "boxMin":'.$boxMin.',
             "cover":'.$cover.',
             "marque":'.$marque.',
             "paragraph":'.$paragraph.',
             "sliderMin":'.$sliderMin.',
             "sliderMax":'.$sliderMax.',
             "slider":'.$slider.',
             "client_commentMax":'.$client_commentMax.',
             "client_commentMin":'.$client_commentMin.',
             "static":'.$static.',
             "fpforms":'.$fpforms.',
             "cat_type": "indexed",
             "page_title": "'.$navname.'",
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
             "navID" : "'.$page_id.'",
             "boxMinID": "'.$boxMinID.'",
             "box_ID" : "'.$box_id.'",
             "Topic_ID" : "'.$Topic_id.'",
               "lang":"'. $lang.'",
             "member":"'. $member.'",
             "member_user" : "'. $member_user.'",
             "member_id" :"'. $member_id.'",
             "fav_product":"'. $fav_product.'",
            "count_fav_product":"'. $count_fav_product.'",
            "Admin_user":"'. $Admin_user.'"

           }';






        if( $countnav > 0){



         return $All;




        }



    }




}



?>
