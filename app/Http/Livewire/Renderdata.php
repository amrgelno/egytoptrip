<?php

namespace App\Http\Livewire;
use App\Models\Admin;
use Livewire\Component;

class Renderdata extends Component
{
    public function render()
    {
        $Admin=Admin::all();

        return view('livewire.renderdata',compact('Admin'));
    }



    public $name;

    public function store(){





        Admin::where( 'email', 'amr@designwayseg.com' )->update([


            'username'=>$this->name,



          ]);




                                                                        }




}