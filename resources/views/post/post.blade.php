
@include('common.user_head')
@include('common.user_navbar')


@section('title','投稿')
<a href="{{action('HomeController@index')}}">
     <button class="btn btn-danger" type="submit">user_home</button>
</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('post') }}</div>
                <div class="card-body">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <h1>新しい投稿を作成しましょう</h1>
                                <textarea name="text" placeholder=""></textarea>
                                 <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn btn-primary"type="submit">textを作成</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
