<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\member_pr;
use App\Models\fav_product;
use Livewire\Component;

class favads extends Component
{
    public function render()
    {


@$member_id=auth::guard('member')->user()->id;

        $cart=member_pr::leftJoin
('fav_product' , 'member_pr.id' , '=', 'fav_product.PROD_ID')
->where('member_id', $member_id)->get();

if (!empty($cart)){

    $cart;

}else{

    $cart=0;

}

        return view('livewire.favads',compact('cart'));
    }
}