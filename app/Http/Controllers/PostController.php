<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
 //text 作成画面を表示
    public function index(){
         return view('post.post');
    }

    //DBに登録し、投稿完了画面へ
    public function post(Request $request){
             $user = Auth::user();
             $user_id = Auth::id();

        //todoがpostされた時
             $textPost = $request->all();
             Post::create($textPost);
         return view('home');
    }

    public function showTimeline(User $user){
        $user = User::find($user->id); //idが、リクエストされた$userのidと一致するuserを取得
        $posts = Post::where('user_id', $user->id) //$userによる投稿を取得
        ->orderBy('created_at', 'desc') // 投稿作成日が新しい順に並べる
        ->paginate(10); // ページネーション;
        return view('post.timeline', [
        'user_name' => $user->name, // $user名をviewへ渡す
        'posts' => $posts, // $userの書いた記事をviewへ渡す
        ]);
        }


    //タイムライン画面を表示
    //public function showTimeline(User $user){
      //  $posts=Post::all();
        //$user = User::find($user->id); //idが、リクエストされた$userのidと一致するuserを取得
        //$posts = Post::where('user_id', $user->id); //$userによる投稿を取得

        //return view('post.timeline',['posts' => $posts],);
    //}

}
