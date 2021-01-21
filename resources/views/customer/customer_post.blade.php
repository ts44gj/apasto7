@extends('layouts.app')
@section('title','投稿')
<a href="{{action('HomeController@index')}}">
     <button class="btn btn-danger" type="submit">jikoken</button>
</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('todo_daily') }}</div>
                <div class="card-body">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <h1>新しいポストを作成しましょう</h1>
                            <p>こんな風に書いてみて</p>
                            <p>TODO:とても面白い本(○章まで)読む。</p>
                            <p>DIARY:お母さんのお手伝いをしました。喜んでいました。</p>
                                <textarea name="todo" placeholder=""></textarea>
                                 <input type="hidden" name="admin_id"  value="{{Auth::admin()->id}}">
                                <p><button class="btn btn-primary"type="submit">TODOを作成</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
