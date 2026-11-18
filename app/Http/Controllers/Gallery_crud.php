<?php

namespace App\Http\Controllers;
use App\Models\gallery ;
use App\Models\seo ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;


class gallery_crud extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get();

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ;

           }


        $gallery=gallery::paginate(25,['id','title','Description','pic'])->withQueryString();

        return view('Admin.Auth.gallery',compact('gallery'),
        [ 'Domain_site' => $Domain_site ]);


    }

  /**
     * Store a newly created resource in storage.
     * @param  \App\Models\gallery
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {




    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\gallery
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 USE UploadImg;   //  use Traits

    public function store(Request $request)
    {



        echo  "<script>   alert('Data send success'); </script>";



        if(!empty($request -> gallerypicture)){

            @$FILENAME=$this ->saveImage($request->gallerypicture ,'Front/IMG/');

        }else{

            @$FILENAME=Null;

        }

         @$title=$request->Mediatitle;
        @$Description=$request->PicDescription;


        gallery::create([

    'title'=>$title,
    'Description'=> $Description,
    'pic'=> $FILENAME,

                      ]);




                      return redirect()->route('gallery.index');





            }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\gallery
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,gallery $galleryitem)
    {

$gallery=gallery::paginate(25,['id','title','Description','pic']);;

$gallery_id=$request->gallery;

  return view('Admin.Auth.gallery',  [ 'gallery_id' => $gallery_id ]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {




    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,gallery $gallery_id)
    {

        echo  "<script>   alert('Data send success'); </script>";

         @$title=$request->Mediatitle;
        @$Description=$request->PicDescription;

        if(!empty($request -> gallerypicture)){

            @$FILENAME=$this ->saveImage($request->gallerypicture ,'Front/IMG/');

            gallery::where('id',$request->gallery)->update([

                'title'=>$title,
                'Description'=> $Description,
                'pic'=> $FILENAME,

                          ]);

        }else{

            gallery::where('id',$request->gallery)->update([

                'title'=>$title,
                'Description'=> $Description,

                          ]);
        }






                      return redirect()->route('gallery.index');



    }

    /**
     * Remove the specified resource from storage.
     * @param
     * @param  \App\Models\gallery
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,gallery $galleryitem)
    {

        $gallery_id=$request->gallery;

        gallery::where('id',$gallery_id)->Delete();

        return redirect()->route('gallery.index');

    }
/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\gallery
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,gallery $galleryitem)
    {



    }




}