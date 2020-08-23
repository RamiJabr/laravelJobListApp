@extends('layouts.app')

@section('content')
<div class="container">


    <div class="card pb-3 mb-3">
        <h5 class="card-header">{{ $job->title }} -- <a href="{{ route('companies.show', $job->companyId ) }}">{{$job->companyName}}</a> </h5>
        <div class="card-body">
            <h5>Job Description</h5>
            <div class="card-text">{{ $job->description }}</div>
            <hr>
            <h5>Field</h5>
            <div class="card-text">{{ $job->type }}</div>
        </div>
        @if (Route::has('login'))
        @auth
        @can('update', $job)
        <a class="text-right mr-3" href="{{ route('jobs.edit', $job->id) }}">edit</a>
        @endcan
        @endauth
        @endif
    </div>

    <a class="m-5" href="{{ route('jobs.index') }}">return to all jobs</a>



</div>
@endsection