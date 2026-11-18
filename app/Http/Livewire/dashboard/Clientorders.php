<?php

namespace App\Http\Livewire\dashboard;
use App\Models\member;      //->members_crud
use Livewire\Component;

class Clientorders extends Component
{
    public function render()
    {

        $memberorders=member::leftJoin
        ('orders' , 'members.id' , '=', 'orders.sender_id')->where('orders.username','!=',Null)->get();

        return view('livewire.dashboard.clientorders',compact('memberorders'));
    }
}
