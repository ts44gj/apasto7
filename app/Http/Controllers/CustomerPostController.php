<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CustomerPostController extends Controller
{

    //タイムライン画面を表示
    public function showTimeline(){
             $posts=Post::all();
         return view('customer.customer_timeline',['posts' => $posts],);
    }

}
