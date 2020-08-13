@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($jobs as $job)
        <div class="card">
        <h5 class="card-header">{{ $job->title }}  {{ $job->companyId }}  </h5>
            <div class="card-body">
                <div class="card-text"><a href="{{ route('companies.show', $job->companyId ) }}">{{$job->companyName}}</a></div>
                <div class="card-text">{{ $job->description }}</div>
                <a href="{{ route('jobs.show', $job->id) }}">More details...</a>
            </div>
        </div>
    @endforeach
    @if (Route::has('login'))
        @auth
    <button><a href="/jobs/create">Add an entry</a></button>
        @endauth
    @endif


</div>
@endsection