<?php

namespace App\Http\Controllers\member\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\member;
use App\Models\company;
use App\Models\seo ;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as  BaseController;


class RegisterController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  //  protected $redirectTo = RouteServiceProvider::Dashboard;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\Models\member
    //  *  @param  \Illuminate\Http\Request  $request
     *@return \Illuminate\Http\Response
     */
    protected function reg(Request $request)
    {

        $member=member::where('email', $request->email )->get();

        $Count_member= count($member);

        if( $Count_member==1){

            // echo"<script> alert ('your email in DB') </script>";
            // echo  '<meta http-equiv="refresh"  content="1,url=/member/Log_in " />';

            return redirect()->route('member.register')
            ->with('success ','your email in DB');

        }else{

        member::create([

            'username' => $request->name,
            'email'    => $request->email,
            'remember_token'    => base64_encode($request->password),
            //'remember_token'    => base64_encode($request->password),
            'mobile'   => $request->Mobile,
            'Distantion' => $request->Distantion,
            'country' => $request->country,
            'password' => bcrypt($request->password),
            //'password' => Hash::make($request->password),
        ]);


    //     return redirect()->route('member.Login')
    // ->with('success ','reg success');

    echo"<script> alert ('you have been reg') </script>";


    return redirect()->route('member.Login');


}
    }
    public function showRegistrationForm()
    {

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get();

        foreach ($SEO as $SEOitem){

         $Domain_site = $SEOitem-> Domain_site ;


        }


        $Maxcompanyid=company::whereRaw('id = (select max(id)from companies) ')->get();

        return view('member.Auth.register',compact('Maxcompanyid'),[


            'Domain_site'=> $Domain_site



        ]);
    }

    protected function guard()
    {
        return Auth::guard("member");
    }

}