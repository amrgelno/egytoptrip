<?php

namespace App\Http\Livewire\Newtopic;
use App\Models\box ;
use Livewire\Component;

class BoxGroup extends Component
{
    public function render()
    {

      // $page_id=$_POST['MainM_ID'];

      // $box=box::where('nav_id',$page_id)->get();

      $box=box::select('cat_Name')->distinct()->get();

        return view('livewire.newtopic.box-group',compact('box'));

    }





}