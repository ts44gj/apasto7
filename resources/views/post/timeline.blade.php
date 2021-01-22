@extends('layouts.app')



@section('content')
    <a href="{{action('HomeController@index')}}">
        <button class="btn btn-danger" type="submit">home</button>
    </a>

 <div class="row justify-content-center">
   <p>みんなの投稿</p>
 </div>
   <div class="mb-4">
        <p>{{ $user_name }}の投稿一覧</p>
        </div>

 <div class="">
      @foreach ( $posts as $post )
            <div class="row justify-content-center">
              <p class="">text:{{ $post -> text }}</p>
        @endif
      @endforeach

 </div>

@endsection
