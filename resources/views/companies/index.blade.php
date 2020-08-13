@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($companies as $company )
        <div class="card m-4">
        <h5 class="card-header">{{ $company->name }}</h5>
            <div class="card-body">
                <div class="card-text">{{ $company->address }}</div>
                <a href="{{ route('companies.show', $company->id) }}">More details...</a>
            </div>
        </div>
    @endforeach
    @if (Route::has('login'))
        @auth
        <div class="text-center"> <button class="text-center btn btn-primary"><a  class="text-dark" href="/companies/create">Add an entry</a></button></div>
        @endauth
    @endif


</div>
@endsection