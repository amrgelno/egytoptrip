<?php

namespace App\Http\Livewire\Newtopic;
use App\Models\SNumbers ;
use Livewire\Component;

class StaticGroup extends Component
{
    public function render()
    {

       $SNumbers =SNumbers::get();
        return view('livewire.newtopic.static-group',compact('SNumbers'));
    }
}