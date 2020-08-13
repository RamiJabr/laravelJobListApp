@extends('layouts.app')

@section('content')
<div class="container">


    <div class="card pb-3 mb-3">
        <h5 class="card-header">{{ $company->name }}</h5>

        <div class="card-body">
            <h5>Address</h5>
            <div class="card-text">{{ $company->address }}</div>
            <hr>
            <h5>Trade</h5>
            <div class="card-text">{{ $company->trade }}</div>
        </div>
        @if (Route::has('login'))
        @auth
        <a class="text-right mr-3" href="{{ route('companies.edit', $company->id) }}">edit</a>
        @endauth
        @endif
        <hr>


        <div class="container">
            <h5>Job offers</h5>
            <ul>
            @foreach( $jobs as $job)
            <li class="card-text"><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a></li>
            @endforeach
            </ul>
            <a class="text-right mr-3" href="{{ route('jobs.create', $company->id) }}">add a job offer</a>
        </div>
    </div>

    <a class="m-5" href="/companies">return to all companies</a>



</div>
@endsection