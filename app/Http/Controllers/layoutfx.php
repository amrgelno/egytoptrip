<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\member;
use App\Models\cover;
use App\Models\paragraph ;
use App\Models\social ;
use App\Models\topic ;
use App\Models\forms ;
use App\Models\keywords ;
use App\Models\company;
use App\Models\video ;
use App\Models\box;
use App\Models\SNumbers ;
use App\Models\nav ;
use App\Models\marque;
use App\Models\slider;
use App\Models\visitors;
use App\Models\searchbar;
use App\Models\seo ;
use App\Models\fpforms ;
use App\Models\view ;
use App\Models\widget;
use App\Models\fav_product;
use App\Models\member_pr;
use App\Models\client_comment;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class layoutfx extends Controller{

/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

function index(Request $request){


    $clientIP=request()->ip();
    //$country= location::get($clientIP);
    $page_id=$request['MainM_ID'];
    $box_id=$request['box_ID'];
    $Topic_id=$request['Topic_ID'];

    $view=view::whereRaw("ID = (select Max(id) from view )")->get();

    foreach ($view as $viewitem){

      $BusinessModel = $viewitem->BusinessModel ;
      $container =   $viewitem->container;
      $bgimage= $viewitem->bg_Image;
      $ulcolor= $viewitem->ulcolor;
     }

    $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get();

    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ;
     $Microformats = $SEOitem-> Microformats ;
     $Breadcrumbs = $SEOitem-> Breadcrumbs ;
     $Footersitemap = $SEOitem-> Footersitemap ;
     $inspector = $SEOitem-> inspect ;

    }


    $widget=widget::whereRaw("ID = (select Max(id) from widget )")->get();


    foreach ($widget as $widgetitem){

      $socialMediapanel = $widgetitem-> socialMediapanel ;
      $sharepanel = $widgetitem-> sharepanel ;
      $clock = $widgetitem-> clock ;
      $photoGallery = $widgetitem-> photoGallery ;
      $chatBot = $widgetitem->chatBot ;
      $Map = $widgetitem->Map ;
      $contactus = $widgetitem->contactus ;
      $logo = $widgetitem->logo ;
      $BrandIcon=$widgetitem->BrandIcon;
      $SearchBar=$widgetitem->SearchBar;
      $langsection=$widgetitem->langsection;

     }


     if($request['Donate']){

        $social=social::get();

        $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

        $navNullfooter=nav::where('footer',NULL)->get();

        //nav-optimize
        $nav=nav::where('parent_id',NULL)->get();

        $Keywords=keywords::where ('nav_id',1)->get();

        $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

        $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

        $box=box::where ('nav_id',1)->get();

        $countnav = count($nav);

        visitors::create([

          'IP_Address' =>$clientIP,
          'vlink' => 'http:'.$Domain_site,
          'vlinktype' => 'Donate',
          'time' =>now(),
          'country' =>'Egypt',
          'Devices' =>$request->header('User-Agent')
         ]);



         $countnav = count($nav);

        if( $countnav > 0){

            return view('/index'
            ,compact('nav','nav_sub','nav_subm','social','Maxcompanyid','Keywords','navNullfooter','box'),[


            'cat_type' =>'Donate',
            'page_title' =>'Donate',
            'BSModel'=> $BusinessModel,
            'Domain_site'=> $Domain_site,
            'container'=>$container,
            'bgimage'=>$bgimage,
            'Microformats' => $Microformats,
            'Breadcrumbs' => $Breadcrumbs,
            'Footersitemap' => $Footersitemap ,
            'inspector'  => $inspector,
            'langsection'=> $langsection,
            'SearchBar'  => $SearchBar ,

           ]);



              }





     }elseif($request['search_bt']){


      $social=social::get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $navNullfooter=nav::where('footer',NULL)->get();

      //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $countnav = count($nav);

      $Keywords=keywords::where ('nav_id',1)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

      $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

      $KWsearch=$request->search_input;

      $box=box::leftJoin
      ('keywords' , 'boxes.ID' , '=', 'keywords.box_id')->where('Keyword','like','%'.$KWsearch.'%')->get();
      $nav2=nav::leftJoin
      ('keywords' , 'navs.id' , '=', 'keywords.nav_id')->where('Keyword','like','%'.$KWsearch.'%')->get();
      $topic=topic::leftJoin
      ('keywords' , 'topics.id' , '=', 'keywords.relatedtopic_id')->where('Keyword','like','%'.$KWsearch.'%')->get();


      searchbar::create([


        'TargetedKeyword' =>  $KWsearch,
        'IP_Address' => $clientIP,
        'Time' =>now(),
        'country' =>'Egypt',
        'Devices' =>$request->header('User-Agent')


       ]);



      if( $countnav > 0){

        return view('/index'
        ,compact('nav','nav_sub','nav_subm','social','Maxcompanyid','Keywords','navNullfooter','topic','box'),[


        'cat_type' =>'searchResult',
        'page_title' =>'search',
        'BSModel'=> $BusinessModel,
        'Domain_site'=> $Domain_site,
        'container'=>$container,
        'bgimage'=>$bgimage,
        'Microformats' => $Microformats,
        'Breadcrumbs' => $Breadcrumbs,
        'Footersitemap' => $Footersitemap ,
        'inspector'  => $inspector,
        'langsection'=> $langsection,
        'SearchBar'  => $SearchBar ,

       ]);



          }


        }elseif(empty($page_id)  & empty($box_id) & empty($Topic_id) or ($page_id=='1')){

  $cover=cover::where('nav_id',1)->get();

  $box=box::where('nav_id',1)->get();

  $marque=marque::where('nav_id',1)->get();

  $static=SNumbers::where ('nav_id',1)->get();

    $paragraph=paragraph::where ('nav_id',1)->get();

    $Keywords=keywords::where ('nav_id',1)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('nav_id',1)->get();


    $box=box::where ('nav_id',1)->get();

$boxMax=box::where('BOX_STYLE' , '=','BoxModel3')->whereRaw('id = (select Max(id)from boxes Where BOX_STYLE="BoxModel3" and  nav_id=1  )')->get();

$boxMin=box::where ('BOX_STYLE' ,'=', 'BoxModel3')->whereRaw('id < (select Max(id)from boxes Where  BOX_STYLE="BoxModel3" and   nav_id=1 )')->limit(5)->get();

$boxIDMin=box::where('BOX_STYLE' , '=','BoxModel3')->whereRaw('id = (select Min(id)from boxes  where  BOX_STYLE="BoxModel3" and  nav_id=1 )')->get();

    foreach ($boxIDMin as $Minitem){

      $boxMinID = $Minitem->ID ;

     }


     $fpforms=fpforms::where ('nav_id',1)->get();

    $client_commentMax=client_comment::where ('status','Active')->whereRaw('id = (select Max(id)from client_comment where  status="Active" )')->get();

    $client_commentMin=client_comment::where ('status','Active')->whereRaw('id < (select Max(id)from client_comment where  status="Active")')->get();

    $client_commentIDMin=client_comment::where('status','Active')->whereRaw('id = (select Min(id)from client_comment  where  status="Active" )')->get();

    foreach ($client_commentIDMin as $client_commentitem){

      $commentMinID = $client_commentitem->ID ;

     }



    $topic=topic::where ('nav_id',1)->get();


     $social=social::get();

     $Maxcompanyid=company::whereRaw('id = (select max(id)from companies) ')->get();

     $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

     $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

     $slider=slider::where ('nav_id',1)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU


     $navbreadcrumb=nav::where('id',1)->get();


     foreach($navbreadcrumb as  $breadcrumbitem ){

      $navname=$breadcrumbitem->sub1menu;


      }



    $countnav = count($nav);

    visitors::create([

      'IP_Address' =>$clientIP,
      'vlink' => 'http:'.$Domain_site,
      'vlinktype' => 'navlink',
      'time' =>now(),
      'country' =>'Egypt',
      'Devices' =>$request->header('User-Agent')
     ]);

   if( $countnav > 0){



 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','Keywords','social','Maxcompanyid','navNullfooter','marque','paragraph','topic','fpforms','box','client_commentMin','client_commentMax','sliderMin','sliderMax','boxMax','boxMin','slider','static'),[

  'cat_type' =>'indexed',
  'page_title' => $navname,
  'BSModel'=> $BusinessModel,
  'Domain_site'=> $Domain_site,
  'container'=>$container,
  'bgimage'=>$bgimage,
  'Microformats' => $Microformats,
  'Breadcrumbs' => $Breadcrumbs,
  'Footersitemap' => $Footersitemap ,
  'inspector'  => $inspector,
  'SearchBar'  => $SearchBar,
  'langsection'=> $langsection,
  'navID' => $page_id ,
  'boxMinID' => $boxMinID??' '


 ]);

   }

   }elseif($request['MainM_ID']){

    $clientIP=request()->ip();

    $cover=cover::where('nav_id',$page_id)->get();

    $box=box::where('nav_id',$page_id)->get();

    $fpforms=fpforms::where ('nav_id',$page_id)->get();

   $marque=marque::where('nav_id',$page_id)->get();

    $static=SNumbers::where ('nav_id',$page_id)->get();

    $paragraph=paragraph::where ('nav_id',$page_id)->get();

   $Keywords=keywords::where ('nav_id',$page_id)->get();

   // $company=company::where ('nav_id',1)->get();

   $fpforms=fpforms::where ('nav_id',$page_id)->get();

$box=box::where ('nav_id',$page_id)->get();

$boxMax=box::where('BOX_STYLE' , '=','BoxModel3')->where ('nav_id',$page_id)->whereRaw("id = (select Max(id) from boxes where  BOX_STYLE='BoxModel3'  and  nav_id='$page_id' )")->get();

$boxMin=box::where ('BOX_STYLE' ,'=', 'BoxModel3')->where ('nav_id',$page_id)->whereRaw("id < (select Max(id) from boxes  where BOX_STYLE='BoxModel3'  and  nav_id='$page_id')")->limit(5)->get();

$boxIDMin=box::where('BOX_STYLE' , '=','BoxModel3')->whereRaw("id = (select Min(id) from boxes  where  BOX_STYLE='BoxModel3' and  nav_id='$page_id' )")->get();

foreach ($boxIDMin as $Minitem){

    $boxMinID = $Minitem->ID ;


   }

    $topic=topic::where ('nav_id',$page_id)->get();

     $social=social::get()??'';

     $Maxcompany_id=company::Max('id')->get()??'';

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get()??'';

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->where ('nav_id',$page_id)->get()??'';
      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->where ('nav_id',$page_id)->get()??'';

      $slider=slider::where ('nav_id',$page_id)->get()??'';

      // $slider=slider::where ('nav_id',$page_id)->get();

     $navNullfooter=nav::where('footer',NULL)->get()??'';

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get()??'';

      $nav_sub=nav::where('parent_id','<>',0)->get()??'';  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get()??'';   //TREMENU

    $countnav = count($nav);


    $navbreadcrumb=nav::where('id',$page_id)->get();


    foreach($navbreadcrumb as  $breadcrumbitem ){

     $navname=$breadcrumbitem->sub1menu;


     }



    visitors::create([

      'IP_Address' => $clientIP,
      'vlink' => 'http:'.$Domain_site.'?MainM_ID='.$page_id,
      'vlinktype' => 'navlink',
      'time' =>now(),
      'country' =>'Egypt',
      'Devices' =>$request->header('User-Agent')


     ]);


   if( $countnav > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','social','Keywords','Maxcompanyid','navNullfooter','marque','paragraph','fpforms','topic','box', 'boxMax','boxMin', 'sliderMin','sliderMax','slider','static'),[


  'cat_type' =>'indexed',
  'page_title' => $navname,
  'BSModel'=> $BusinessModel,
  'Domain_site'=> $Domain_site,
  'container'=>$container,
  'bgimage'=>$bgimage,
  'Microformats' => $Microformats,
  'Breadcrumbs' => $Breadcrumbs,
  'Footersitemap' => $Footersitemap ,
  'inspector'  => $inspector,
  'SearchBar'  => $SearchBar,
  'langsection'=> $langsection,
  'navID' => $page_id,
  'boxMinID' => $boxMinID??' '


]);




   }


   }elseif($request['box_ID']){

    $member_pr=member_pr::where('Box_ID',$box_id)->get();

    if (!empty($member_pr)){

      $member_pr;

    }else{

      $member_pr=0;

    }

    $clientIP=request()->ip();

    $cover=cover::where('box_id',$box_id)->get();

    $box=box::where('box_id',$box_id)->get();


    $boxbreadcrumb=box::where('ID',$box_id)->get();

    foreach($boxbreadcrumb as  $breadcrumbitem ){

    $cat_type=$breadcrumbitem->cat_type;

    $page_title=$breadcrumbitem->title;


    }



    $fpforms=fpforms::where ('box_id',$page_id)->get()??'';




  //  $marque=marque::where('box_id',$box_id)->get();

    $static=SNumbers::where ('box_id',$box_id)->get();

    $paragraph=paragraph::where ('box_id',$box_id)->get();

   $Keywords=keywords::where ('box_id',$box_id)->get();

   // $company=company::where ('nav_id',1)->get();

    $box=box::where ('box_id',$box_id)->get();

    $topic=topic::where ('box_id',$box_id)->get();

     $social=social::get();

     $Maxcompany_id=company::Max('id')->get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $slider=slider::where('box_id',$box_id)->get();

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')-> where('box_id',$box_id) ->get();

      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')-> where('box_id',$box_id)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countnav = count($nav);

    visitors::create([


      'IP_Address' => $clientIP,
      'vlink' => 'http:'.$Domain_site.'?box_ID='.$box_id,
      'vlinktype' => 'boxlink',
      'time' =>now(),
      'country' =>'Egypt',
      'Devices' =>$request->header('User-Agent')


     ]);

   if( $countnav > 0){

 return view('/index'
 ,compact('member_pr','nav','nav_sub','nav_subm','cover','social','Keywords','Maxcompanyid','navNullfooter','paragraph','fpforms','topic','box','sliderMin','sliderMax','slider','static'),[


   'cat_type' => $cat_type,
   'page_title' => $page_title,
   'BSModel'=> $BusinessModel,
   'Domain_site'=> $Domain_site,
   'container'=>$container,
   'bgimage'=>$bgimage,
   'Microformats' => $Microformats,
   'Breadcrumbs' => $Breadcrumbs,
   'Footersitemap' => $Footersitemap ,
   'inspector'  => $inspector,
   'SearchBar'  => $SearchBar ,
   'langsection'=> $langsection,
   'box_ID' => $box_id

 ]);

   }


   }elseif($request['Topic_ID']){

    $clientIP=request()->ip();

    $cover=cover::where('relatedtopic_id', $Topic_id)->get();

    $box=box::where('relatedtopic_id',$Topic_id)->get();

  //  $marque=marque::where('nav_id',$page_id)->get();

   // $static=SNumbers::where ('nav_id',1)->get();

    $paragraph=paragraph::where ('relatedtopic_id',$Topic_id)->get();

   // $keywords=keywords::where ('nav_id',1)->get();

   // $company=company::where ('nav_id',1)->get();


   $fpforms=fpforms::where ('relatedtopic_id',1)->get()??'';

   $Keywords=keywords::where ('relatedtopic_id',$Topic_id)->get();

   $static=SNumbers::where ('relatedtopic_id',$Topic_id)->get();

    $box=box::where ('relatedtopic_id',$Topic_id)->get();

    $topic=topic::where ('relatedtopic_id',$Topic_id)->get();

    $topicbreadcrumb=topic::where('id',$Topic_id)->get();

    foreach($topicbreadcrumb as  $breadcrumbitem ){

    $cat_type='indexed';

    $page_title=$breadcrumbitem->subject;

    }


     $social=social::get();

      $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

      $sliderMin=slider::whereRaw('id = (select Min(id)from sliders)')->get();

      $sliderMax=slider::whereRaw('id > (select Min(id)from sliders)')->get();

      $slider=slider::where ('nav_id',1)->get();

     $navNullfooter=nav::where('footer',NULL)->get();

   //nav-optimize
      $nav=nav::where('parent_id',NULL)->get();

      $nav_sub=nav::where('parent_id','<>',0)->get();  //submenu

     $nav_subm=nav::where('SUBMENUID','<>',0)->get();   //TREMENU

    $countnav = count($nav);


    visitors::create([

      'IP_Address' => $clientIP,
      'vlink' => 'http:'.$Domain_site.'?Topic_ID='.$Topic_id,
      'vlinktype' => 'topiclink',
      'time' =>now(),
      'country' =>'Egypt',
      'Devices' =>$request->header('User-Agent')

     ]);

   if( $countnav > 0){

 return view('/index'
 ,compact('nav','nav_sub','nav_subm','cover','static','social','Keywords','Maxcompanyid','navNullfooter','paragraph','fpforms','topic','box','sliderMin','sliderMax','slider'),[


  'cat_type' => $cat_type,
 'page_title' => $page_title,
 'BSModel'=> $BusinessModel,
 'Domain_site'=> $Domain_site,
 'container'=>$container,
 'bgimage'=>$bgimage,
 'Microformats' => $Microformats,
 'Breadcrumbs' => $Breadcrumbs,
 'Footersitemap' => $Footersitemap ,
 'inspector'  => $inspector,
 'SearchBar'  => $SearchBar,
 'langsection'=> $langsection,
 'Topic_ID' => $Topic_id

]);





   }
   }

}






}