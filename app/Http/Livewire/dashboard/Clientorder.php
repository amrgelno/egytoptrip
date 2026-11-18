<?php

namespace App\Http\Livewire\dashboard;
use App\Models\member;
use Livewire\Component;

class Clientorder extends Component
{
    public function render()
    {

        $memberorders=member::leftJoin
        ('orders' , 'members.id' , '=', 'orders.sender_id')->where('orders.username','!=',Null)->get();


        $countmemberorders=count($memberorders);

        return view('livewire.dashboard.clientorder',[

         'countmemberorders' => $countmemberorders

        ]);
    }
}
