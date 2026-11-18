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
use App\Models\seo ;
use App\Models\fav_product;
use App\Models\member_pr;
use App\Models\gallery;

use Illuminate\Http\Request;

Trait  Jsonsearchbar_trait
{


    public function fxsearch($themes,$lang,$KWsearch,$page_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir){




          $social=social::get();

          $gallery=gallery::get();

          $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

          $navNullfooter=nav::where('footer',NULL)->get();

          //nav-optimize
          $nav=nav::where('parent_id',NULL) ->where('SUBMENUID',NULL)->get();

          $countnav = count($nav);

          $Keywords=keywords::where ('nav_id',1)->get();

          $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

          $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU


          $box=box::leftJoin
          ('keywords' , 'boxes.ID' , '=', 'keywords.box_id')->where('Keyword','like','%'.$KWsearch.'%')->get();
          $nav2=nav::leftJoin
          ('keywords' , 'navs.id' , '=', 'keywords.nav_id')->where('Keyword','like','%'.$KWsearch.'%')->get();
          $topic=topic::leftJoin
          ('keywords' , 'topics.id' , '=', 'keywords.relatedtopic_id')->where('Keyword','like','%'.$KWsearch.'%')->get();



           $All='{
            "themes":'.$themes.',
            "social": '.$social.',
            "Maxcompanyid": '.$Maxcompanyid.',
            "navNullfooter": '.$navNullfooter.',
            "nav": '.$nav.',
            "Keywords":'.$Keywords.',
            "nav": '.$nav.',
            "nav_sub":'.$nav_sub.',
            "nav_subm":'.$nav_subm.',
            "box":'.$box.',
            "nav2":'.$nav2.',
            "topic":'.$topic.',
            "fpforms":'.$fpforms.',
            "cat_type": "searchResult",
            "page_title": "search",
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