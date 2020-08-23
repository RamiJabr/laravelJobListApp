@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">
    @can('isAdmin')
    <div class="btn btn-success btn-lg">
        You have Admin Access
    </div>
    @endcan

    @if (Route::has('login'))
    <div class="text-center">
        @auth
        <a href="{{ route('jobs.index') }}">Post or find your dream Job !!!!</a>
        @else

        Find your dream job now !!! <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post job offers

        @endauth
    </div>
    @endif

    <div class="content">
    </div>
</div>


@endsection