<?php

namespace App\Http\Controllers;
use App\Models\post ;
use Illuminate\Http\Request;
use Auth;
use App\Http\Traits\Basecontroller;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{



    use Basecontroller;
    
    public function Create(Request $request){
        //return 'Hello';


       Log::info('Request received:', $request->all());
    

        $user = Auth::guard('member')->user();
        
        Log::info('Authenticated User:', ['user' => $user]);
    
        if (!$user) {
            return response()->json(['error' => 'you are Unauthorized'], 401);
        }
    
        $adminPosts = $request->input('AdminPosts');
        Log::info('Admin Posts:', ['posts' => $adminPosts]);
    
        $memberPost = Post::create([
            'AdminPosts' => $adminPosts,
            'User_id' => $user->id,
        ]);
    
        return response()->json(['success' => true, 'post' => $memberPost], 200);



    }
}