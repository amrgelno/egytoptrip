<?php

namespace App\Http\Controllers\member\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\member;
use App\Models\seo ;
use App\Models\company;
use App\Http\Traits\Basecontroller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

//use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers,Basecontroller;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

   protected $redirectTo ;
// //     /**
// //      * Create a new controller instance.
// //      *
// //      * @return void
// //      */


  public function __construct()
   {

    $this->redirectTo =route('member.Dashboard');
// // // //        $this->redirectTo =route('u.dashboard');
// // // //      //   $this->redirectTo =route('member.index');   // dashboard  with   crud
      $this->middleware('guest')->except('logout');   // middleware for login
    }


   public function showLoginForm()
     {


        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get();

        foreach ($SEO as $SEOitem){

         $Domain_site = $SEOitem-> Domain_site ;


        }


        $Maxcompanyid=company::whereRaw('id = (select max(id)from companies) ')->get();




         return view('member.Auth.login',compact('Maxcompanyid'),[


            'Domain_site'=> $Domain_site,



         ]);


    }

    public function json(Request $request)
    {


   //$request->session()->regenerate();

//return redirect()->route('member.Dashboard');;


   //$success['token']=$member->createToken($request->password)->acesstoken();
   //$success['name']=$member->name;


  $email=@Auth::guard('member')->user()->email;
  $password =@Auth::guard('member')->user()->password;

   if (!empty( $email  &&   $password )  ) {

    $username=Auth::guard('member')->user()->username;
    

   $result =response()->json(['member'=>$username]);

   return $this->sendResponse($result ,'success');


   }else{

    return $this->sendError('unauthorised');

   }

 // return redirect()->route('member.Login')
 //  ->with('Success','The provided credentials do not match our records');    // false return to login */


    }



     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

if (Auth::guard('member')->attempt($credentials)) {

     $request->session()->regenerate();

     return redirect()->route('member.Dashboard');


        }else{

return redirect("/member/Log_in")->withSuccess('Login details are not valid');
        }
  // return redirect()->route('member.Login')
  //  ->with('Success','The provided credentials do not match our records');    // false return to login */


     }



    protected function guard()
    {
        return Auth::guard('member');
    }



}