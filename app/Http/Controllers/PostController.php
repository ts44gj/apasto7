<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
 //todo or diary 作成画面を表示
    public function index(){
         return view('post.post');
    }

    //DBに登録し、投稿完了画面へ
    public function post(Request $request){
             $user = Auth::user();

        //todoがpostされた時
             $textPost = $request->all();
             Post::create($textPost);
         return view('home');
    }
}
