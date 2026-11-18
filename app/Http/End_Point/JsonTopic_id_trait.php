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
use App\Models\fpforms;
use App\Models\SNumbers ;
use App\Models\nav ;
use App\Models\marque;
use App\Models\slider;
use App\Models\visitors;
use App\Models\searchbar;
use App\Models\seo ;
use App\Models\fav_product;
use App\Models\member_pr;
use App\Models\gallery;

use Illuminate\Http\Request;

Trait  JsonTopic_id_trait
{


    public function fxTopic_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir){

        $cover=cover::where('relatedtopic_id', $Topic_id)->get();

        $box=box::where('relatedtopic_id',$Topic_id)->get();

       $marque=marque::where('nav_id',1)->get();

       // $static=SNumbers::where ('nav_id',1)->get();

        $paragraph=paragraph::where ('relatedtopic_id',$Topic_id)->get();

       // $keywords=keywords::where ('nav_id',1)->get();

       // $company=company::where ('nav_id',1)->get();

       $Keywords=keywords::where ('relatedtopic_id',$Topic_id)->get();

       $static=SNumbers::where ('relatedtopic_id',$Topic_id)->get();

        $box=box::where ('relatedtopic_id',$Topic_id)->get();

        $topic=topic::where('relatedtopic_id',$Topic_id)->get();

        $fpforms=fpforms::where ('nav_id',$page_id)->get();

        $topicsbreadcrumb=topic::where('id',$Topic_id)->get();

        foreach($topicsbreadcrumb as  $breadcrumbitem ){

        $cat_type='topics';

        $page_title=$breadcrumbitem->subject;

        }


         $social=social::get();

         $gallery=gallery::get();

          $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

          $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

          $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

          $slider=slider::where ('nav_id',1)->get();

         $navNullfooter=nav::where('footer',NULL)->get();

       //nav-optimize
          $nav=nav::where('parent_id',NULL)->where('SUBMENUID',NULL)->get();

          $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

         $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

        $countnav = count($nav);




         $All='{
          "themes":'.$themes.',
          "social": '.$social.',
          "Maxcompanyid": '.$Maxcompanyid.',
          "navNullfooter": '.$navNullfooter.',
          "nav": '.$nav.',
          "Keywords":'.$Keywords.',
          "nav_sub":'.$nav_sub.',
          "nav_subm":'.$nav_subm.',
          "topic":'.$topic.',
          "box":'.$box.',
          "cover":'.$cover.',
          "marque":'.$marque.',
          "paragraph":'.$paragraph.',
          "sliderMin":'.$sliderMin.',
          "sliderMax":'.$sliderMax.',
          "slider":'.$slider.',
          "static":'.$static.',
          "fpforms":'.$fpforms.',
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
          "SearchBar":"'.$SearchBar.'",
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