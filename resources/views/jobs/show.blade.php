@extends('layouts.app')

@section('content')
<div class="container">

   
        <div class="card">
        <h5 class="card-header">{{ $job->title }}</h5>
            <div class="card-body">
                <div class="card-text">{{ $job->description }}</div>
                <div class="card-text">{{ $job->company }}</div>
                <div class="card-text">{{ $job->type }}</div>
            </div>
            <a href="{{ route('jobs.edit', $job->id) }}">edit</a>
        </div>

        <a href="/jobs">return to all offers</a>
   


</div>
@endsection