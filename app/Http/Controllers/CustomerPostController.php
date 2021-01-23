<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CustomerPostController extends Controller
{

     //text 作成画面を表示
    public function index(){
         return view('customer.customer_post');
    }

    public function post(Request $request){
             $customer = Auth::customer();
             $customer_id = Auth::id();

        //textがpostされた時
            $textPost = $request->all();
            Post::create($textPost);
         return view('home');
    }

    //タイムライン画面を表示
    public function showTimeline(){
             $posts=Post::all();
         return view('customer.customer_timeline',['posts' => $posts],);
    }



}
