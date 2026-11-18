<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\member;

use Livewire\Component;

class Profilesetting extends Component
{

    public function render()
    {

        @$member=auth::guard('member');

        return view('livewire.profilesetting',compact('member'));
    }
}
