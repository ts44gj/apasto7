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
                                <textarea name="text" placeholder=""></textarea>
                                 <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn btn-primary"type="submit">TODOを作成</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
