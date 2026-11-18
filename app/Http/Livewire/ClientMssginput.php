<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\company ;
use App\Models\member;
use Livewire\Component;

class ClientMssginput extends Component
{



public   $member_id;


    public function render()
    {

        @$member_id=$_POST['member_id'];

        $memberorders=member::where('id','=',$member_id)->get();

        foreach ( $memberorders  as     $memberordersitem){

         $this->member_id =$memberordersitem->id;

        }

        return view('livewire.client-mssginput');    //  client-Dashboard


    }

 public   $recevier_id="0";

public   $bg_color="#070";

public  $DIR="rtl";

public  $massage;


public function  orderAdd(){


    orders::create([

        'username'=>auth::guard('member')->user()->username ,

        'profile_IMG'    => auth::guard('member')->user()->prof_pic ,

        'sender_id' => auth::guard('member')->user()->id ,

        'recevier_id' =>$this->recevier_id,

        'bg_color' => $this->bg_color,

        'DIR' => $this->DIR,

        'massage' => $this->massage,

        'Time' =>now(),

   ] );

}



public   $sender_id="0";

public   $Abg_color="#770";

public  $ADIR="ltr";

public  $Amassage;


public function  ReorderAdd(){

    $Maxcompanyid=company::whereRaw('id = (select max(id)from companies)')->get();

    foreach ($Maxcompanyid as $companyitem){

      $logo = $companyitem->path_pic ;

     }


      //Admin-Dashboard


    orders::create([

        'username'=>"technicalsupportteam",

        'profile_IMG' => $logo ,

        'sender_id' => $this->sender_id,

        'recevier_id' => $this->member_id,

        'bg_color' => $this->Abg_color,

        'DIR' => $this->ADIR,

        'massage' => $this->Amassage,

        'Time' =>now(),

   ] );


}













}
