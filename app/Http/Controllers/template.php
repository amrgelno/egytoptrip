<?php

namespace App\Http\Controllers;
use App\Models\Theme ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;


class template  extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $template=Theme::get();

        return view('Admin.Auth.template',compact('template'));


    }


    public function update(Request $request) {

        echo  "<script>   alert('Data send success'); </script>";

        Theme::where('id',$request->webtemplate)->update([

                'status'=>'Active'

                          ]);



                          Theme::where('id','!=',$request->webtemplate)->update([

                            'status'=>Null

                                      ]);


                          return redirect()->route('Webtemplates');


        }


    }


    ?>