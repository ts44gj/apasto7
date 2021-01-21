<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //テーブル名
    protected $table = 'posts';

    //可変項目(変わる項目)
    protected $fillable =
    [
        'user_id',
        'text'
    ];

    //public function targets(){
       // return $this->hasMany(Target::class);これでリレーションで扱えないか。。。
   // }



    //Postモデルからuserを唱えるとユーザーにアクセスできる
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Postモデルでcommentを唱えるとPostのクラスを作ってコメントテーブルにアクセス
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

