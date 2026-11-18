<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Traits\End_Point\Jsonbox_id_trait;
use App\Http\Traits\End_Point\JsonNullpage_id_trait;
use App\Http\Traits\End_Point\Jsonpage_id_trait;
use App\Http\Traits\End_Point\JsonTopic_id_trait;
use App\Http\Traits\End_Point\Jsonsearchbar_trait;
use App\Http\Traits\End_Point\Jsonpurchase_trait;
use Stevebauman\Location\Facades\Location;
use App\Models\seo ;
use App\Models\container ;
use App\Models\visitors;
use App\Models\widget;
use App\Models\searchbar;
use App\Models\view ;
use App\Models\Theme;
use Illuminate\Http\Request;



 class jsonlayoutfx extends Controller{

/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     *
     *
     */



     use JsonNullpage_id_trait,Jsonpage_id_trait,Jsonbox_id_trait,JsonTopic_id_trait,Jsonsearchbar_trait,Jsonpurchase_trait;




    function  index(Request $request){

        $clientIP=request()->ip();

    $data= \Location::get($clientIP);


    //return   $data;


    $country=@$data['cityName'].','.@$data['countryName'];


       //$country= location::get($clientIP);
    //$page_id=base64_decode($request['MainM_ID']);
    //$box_id=base64_decode($request['box_ID']);
   // $Topic_id=base64_decode($request['Topic_ID']);
        $page_id=$request['MainM_ID'];
        $box_id=$request['box_ID'];
        $Topic_id=$request['Topic_ID'];
        $lang=$request['lang'];

        $Destinations=$request['Destinations'];
        $City=$request['City'];
        $Price=$request['Price'];
        $Duration=$request['Duration'];
        $GroupSize=$request['GroupSize'];




        if(isset($request['lang'])){


            $lang=$request['lang'];


        }else{




      $lang= 'en_gb' ;



        }








        if($lang == 'en_gb'){



            $pg_dir='ltr';

        }else{


            $pg_dir='rtl';



        }








        $themes=Theme::where ('status','Active')->get();

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get();



     $Admin_user=auth::guard('admin')->user()->username??'';

    //For Access to  member dashboard
       @$member="   ";
        @$member_user=auth::guard('member')->user()->username?? '';
        @$member_id=auth::guard('member')->user()->id??'';
              // $fav_product=auth::guard('member')->user()->fav_product();??
       @$fav_product="   ";


       if($member_user==true){
       @$count_fav_product=auth::guard('member')->user()->fav_product()->count('member_id')??'';
       }else{

        $count_fav_product='     ';
       }


        $view=view::whereRaw("ID = (select Max(id) from view )")->get();

        foreach ($view as $viewitem){

          $BusinessModel = $viewitem->BusinessModel ;
          $container =   $viewitem->container;
          $bgimage= $viewitem->bg_Image;
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



         if($request['PURCHASE']){


            $json = $this ->fxpurchase($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir );

            return  $json;


          }elseif($request['search_bt']){


            $KWsearch=$request->search_input;



            searchbar::create([


                'TargetedKeyword' =>  $KWsearch,
                'IP_Address' => $clientIP,
                'Time' =>now(),
                'country' => $country,
                'Devices' =>$request->header('User-Agent')


               ]);


    $json = $this->fxsearch($themes,$lang,$KWsearch,$page_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir );


            return $json;

         }elseif(empty($page_id)  & empty($box_id) & empty($Topic_id) or ($page_id=='1')){



        visitors::create([

            'IP_Address' =>$clientIP,
            'vlink' => 'http//:'.$Domain_site,
            'vlinktype' => 'navlink',
            'time' =>now(),
            'country' =>  $country,
            'Devices' =>$request->header('User-Agent')
           ]);





$json = $this->fxNullpage_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir );


return  $json;

//return   response()->json($json);



    }elseif($request['MainM_ID']){


           visitors::create([

            'IP_Address' => $clientIP,
            'vlink' => 'http//:'.$Domain_site.'?MainM_ID='.$page_id,
            'vlinktype' => 'navlink',
            'time' =>now(),
            'country' =>  $country,
            'Devices' =>$request->header('User-Agent')


           ]);


$json = $this ->fxpage_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir );

return  $json;


    }elseif($request['box_ID']){



           visitors::create([


            'IP_Address' => $clientIP,
            'vlink' => 'http//:'.$Domain_site.'?box_ID='.$box_id,
            'vlinktype' => 'boxlink',
            'time' =>now(),
            'country' =>  $country,
            'Devices' =>$request->header('User-Agent')


           ]);


$json = $this ->fxbox_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir,$Destinations,$City,$Price,$Duration,$GroupSize);

return  $json;


    }elseif($request['Topic_ID']){


        //dd($clientIP);

        visitors::create([

            'IP_Address' => $clientIP,
            'vlink' => 'http//:'.$Domain_site.'?Topic_ID='.$Topic_id,
            'vlinktype' => 'topiclink',
            'time' =>now(),
            'country' =>  $country,
            'Devices' =>$request->header('User-Agent')

           ]);



$json = $this ->fxTopic_id($themes,$lang,$page_id,$box_id,$Topic_id,$Admin_user,$member,$member_user,$member_id,$fav_product,$count_fav_product,$Domain_site,$Microformats,$Breadcrumbs,$Footersitemap,$inspector,$socialMediapanel,$sharepanel,$clock,$photoGallery,$chatBot,$Map,$contactus,$logo,$BrandIcon,$SearchBar,$langsection,$BusinessModel,$container,$bgimage,$pg_dir );

return  $json;

    }

}


                }
