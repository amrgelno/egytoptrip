<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\orders;
use App\Models\member;    

class Marketemail extends Component
{


//protected $listeners=['taskAdded'=>'refresh'];
public $member_id;   

    public function render() {

         
        @$member_id=$_POST['member_id']??$this->member_id;      //Admin_Dashboard  Logic
        

        if( $member_id != null){

        $orders=orders::where('sender_id', $member_id)
        ->where('recevier_id','0')->orwhere('sender_id','0')->where('recevier_id', $member_id)->get();


        $memberorders=member::where('id','=',$member_id)->get();

       foreach ( $memberorders  as     $memberordersitem){

        $this->member_id =$memberordersitem->id;
       }

        }else{


@$member=auth::guard('member');    // member_Dashboard logic

@$member_id=auth::guard('member')->user()->id;

$orders=orders::where('sender_id', $member_id)->where('recevier_id','0')->orwhere('sender_id','0')->where('recevier_id', $member_id)->get();
        }


            // dd($member_id);

        return view('livewire.marketemail',compact('orders'),[

           'mem_id'=>$member_id

        ]);



//$this->emit('taskAdded');
}












}