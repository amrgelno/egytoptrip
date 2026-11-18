<?php

namespace App\Http\Controllers;
use App\Models\box;
use Illuminate\Http\Request;

class Findtour extends Controller
{

function Reterivetours(Request $request){

    $Destintion=$request->Destintion;

    $City=$request->City;

    $filter=$request->filter;

    $colsel=$request->colsel;

    $box_id=$request->box_id;

        $lang=$request->lang;

    $Getbox=box::where('box_id', $box_id);

if(empty($colsel)){

switch($filter){

case 'price_desc':
$colsel = 'price';

$box=$Getbox->orderBy($colsel,'desc')->get();

break;
case 'price_asc':
$colsel = 'price';
$box=$Getbox->orderBy($colsel,'asc')->get();
break;
case 'dur_desc':
$colsel = 'Duration';
$box=$Getbox->orderBy($colsel,'desc')->get();
break;
default:
$colsel = 'Duration';
$box=$Getbox->orderBy($colsel,'asc')->get();
break;
}

    }

    if($colsel=='Duration'){

        $Minbox=10;
        $Maxbox=20;

            switch($filter){

                case  $Minbox:

                $Getboxes=box::where('Duration','<',$Minbox)->where('box_id', $box_id);

                $box=$Getbox->orderBy($colsel,'desc')->get();


                if(!empty($Destintion) &&   $Destintion != 'Any' && empty($City)){



                    $box=$Getboxes->where('Country', $Destintion)->get();



                    }elseif(!empty($Destintion) &&  $Destintion!='Any'  && !empty($City)){





                    $box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();



                    }else{




                    $box=$Getboxes->get();

                    }

                break;

                case  $Maxbox:


               // dd($Maxbox);
                    $Getboxes=box::where('Duration','>',$Maxbox)->where('box_id',$box_id);


                    if(!empty($Destintion) &&   $Destintion!='Any'  &&  empty($City)){



                    $box=$Getboxes->where('Country', $Destintion)->get();



                    }elseif(!empty($Destintion) &&   $Destintion!='Any'  &&  !empty($City)){





                    $box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();



                    }else{




                        $box=$Getboxes->get();

                        }

                break;

                default:
                $Getboxes=box::where('Duration','>=',$Minbox)-> where('Duration','<=',$Maxbox)->where('box_id',$box_id);


        if(!empty($Destintion) &&  $Destintion!='Any' && empty($City)){



        $box=$Getboxes->where('Country', $Destintion)->get();



        }elseif(!empty($Destintion) &&    $Destintion!='Any'  && !empty($City)){





        $box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();

        }else{




            $box=$Getboxes->get();

            }

                break;

                        }

   }elseif($colsel=='price'){

$Minbox=1500;
$Maxbox=3000;

    switch($filter){

        case  $Minbox:

        $Getboxes=box::where('price','<',$Minbox)->where('box_id', $box_id);

        $box=$Getbox->orderBy($colsel,'desc')->get();


        if(!empty($Destintion) &&   $Destintion != 'Any' && empty($City)){



            $box=$Getboxes->where('Country', $Destintion)->get();



            }elseif(!empty($Destintion) &&  $Destintion!='Any'  && !empty($City)){





            $box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();



            }else{




            $box=$Getboxes->get();

            }

        break;

        case  $Maxbox:


       // dd($Maxbox);
            $Getboxes=box::where('price','>',$Maxbox)->where('box_id',$box_id);


            if(!empty($Destintion) &&   $Destintion!='Any'  &&  empty($City)){



            $box=$Getboxes->where('Country', $Destintion)->get();



            }elseif(!empty($Destintion) &&   $Destintion!='Any'  &&  !empty($City)){





            $box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();



            }else{




                $box=$Getboxes->get();

                }

        break;

        default:
        $Getboxes=box::where('price','>=',$Minbox)-> where('price','<=',$Maxbox)->where('box_id',$box_id);


if(!empty($Destintion) &&  $Destintion!='Any' && empty($City)){



$box=$Getboxes->where('Country', $Destintion)->get();



}elseif(!empty($Destintion) &&    $Destintion!='Any'  && !empty($City)){





$box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();

}else{




    $box=$Getboxes->get();

    }

        break;

                }


            }else{



$Getboxes=box::where($colsel,$filter)->where('box_id',$box_id);

if(!empty($Destintion) &&   $Destintion !='Any' &&  empty($City) ){

$box=$Getboxes->where('Country', $Destintion)->get();


}elseif(!empty($Destintion) &&    $Destintion !='Any' && !empty($City)){

$box=$Getboxes->where('Country', $Destintion)->where('City',$City)->get();

}else{

$box=$Getboxes->get();

}





}

    $countbox=count($box);


    if($countbox>0){


for ($i = 1; $i<=1; $i++)    {


foreach($box as  $boxitem ){

    ?>


<div class="col-lg-4 col-md-6  mb-4 mb-lg-1" >

    <div class="featured-block d-flex justify-content-center align-items-center">
        <div>

            <img src="Front/IMG/<?php echo $boxitem ->ImageName ?>"   class="featured-block-image img-fluid">


            <p class="featured-block-text">

                <span> 

 <?php if( $lang =='en_gb' ) {
                  

                  echo $boxitem -> title  ; 
                            
                }
                            elseif($lang =='ar'){
          
                                echo $boxitem ->  Ar_title   ;
          
                } ?>

 </span>
                


            </p>

            <p><?php if( $lang =='en_gb' ) {
                  

                    echo  $boxitem -> Desc ;
                            
                }
                            elseif($lang =='ar'){
          
                                 echo    $boxitem -> Ar_Desc ;
          
                } ?>  </p>
           


      <div class='col-12'>
                <div class='row'>


                    <div class='col-md-6  col-xs-6'> price: <span>  <?php echo $boxitem ->price ?> </span>$</div>


                    <div class='col-md-6  col-xs-6'>Duration : <span>  <?php echo $boxitem ->Duration ?> </span> D </div>
                </div>
            </div>
            <br />



            <div class='col-12'>
                <div class='row'>

  <input type='text' class='col-xs-5 col-md-5'  value='<?php echo $boxitem ->created_at ?>'   style="border:unset;" disabled>

                    <div class='col-md-6  col-xs-6'><a href="?box_ID=<?php echo $boxitem ->ID ?>&lang=<?php echo $lang  ?> "
                            class="custom-btn btn">

                            viewmore </a> </div>
                </div>
            </div>

        </div>


    </div>




</div>










                     




                                                                                <?php



}





}
    }else{


echo'<h2 class="mb-5">No data found</h2>';
}

























}
























}