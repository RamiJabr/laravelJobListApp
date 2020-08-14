@extends('layouts.app')

@section('content')
<div class="container">

@if(count($jobs) > 0)
@foreach($jobs as $job)
   
   <div class="card m-5">
       <h5 class="card-header">{{ $job->title }} -- <a href="{{ route('companies.show', $job->companyId ) }}">{{$job->companyName}}</a> </h5>
       <div class="card-body">
           <div class="card-text"></div>
           <div class="card-text">{{ $job->description }}</div>
           <a href="{{ route('jobs.show', $job->id) }}">More details...</a>
        
       </div>
   </div>
  
   @endforeach
   @if (Route::has('login'))
   @auth
 
   <div class="text-center"> <button class="text-center btn btn-primary"><a class="text-dark" href="/jobs/create">Add an entry</a></button></div>

   @endauth
   @endif

   @else

</p>There is no company to assign a job to ! please create a <a href="{{ route('companies.create') }}">company</a> first </p>



@endif
  


</div>
@endsection