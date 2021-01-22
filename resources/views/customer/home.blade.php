@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">customer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
<div>
    <a href="{{action('CustomerPostController@showTimeline')}}">timeline</a>
</div>
<div>
    <a href="{{action('ReservationController@index')}}">reservation</a>
</div>
<div>
    <a href="{{action('AparelController@index')}}">aparel</a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
