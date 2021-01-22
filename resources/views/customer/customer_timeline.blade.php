
@section('content')
    <a href="{{action('CustomerHomeController@index')}}">
        <button class="btn btn-danger" type="submit">home</button>
    </a>


 <div class="row justify-content-center">
   <p>みんなの投稿</p>
 </div>

 <div class="">
      @foreach ( $posts as $post )
        @if( $post -> diary  === NULL)
            <div class="row justify-content-center">
              <p class="">text:{{ $post -> text }}</p>

            </div>
        @else( $post -> todo  === NULL)
            <div class="row justify-content-center">
              <p class="">diary:{{ $post -> diary }}</p>
            </div>
        @endif
      @endforeach

 </div>

@endsection
