<?php

namespace App\Http\Controllers\Api\member\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\member;
use App\Models\seo ;
use App\Models\post ;
use App\Models\company;
use App\Http\Traits\Basecontroller;
//use App\Http\Controllers\BaseController  as   BaseController   ;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Auth;

//use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;


use Auth;
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
      //$this->middleware('guest')->except('logout');   // middleware for login
    }

 


    public function post(Request $request)
    {
        Log::info('Request received:', $request->all());
    
        $user = $member->user();
        Log::info('Authenticated User:', ['user' => $user]);
    
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        $adminPosts = $request->input('AdminPosts');
        Log::info('Admin Posts:', ['posts' => $adminPosts]);
    
        $memberPost = Post::create([
            'AdminPosts' => $adminPosts,
            'User_id' => $user->id,
        ]);
    
        return response()->json(['success' => true, 'post' => $memberPost], 200);
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



   $credentials = $request->validate([
    'email' => 'required',
    'password' => 'required',
 ]);

 $member = Auth::guard('member')->getProvider()->retrieveByCredentials($credentials); 


 //return   $member;
 
 if ($member && Hash::check($credentials['password'], $member->password)) {
 
 
     $pssword=$member->password;
 
     $user_id=$member->id;
 
     $device_name=$request->userAgent();
 
     $username=$member->username;
 
  $token=$member->createToken($device_name.$pssword.$username)->plainTextToken;
 
    $result =response()->json(['token'=> $token,'username'=>$username,'user_id'=>$user_id ]);
 
    return $this->sendResponse($result ,'success');


    }


    }

    public function me(Request $request)
    {
    return $member->user();
    }



     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

if ($member->attempt($credentials)) {

    // $request->session()->regenerate();

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