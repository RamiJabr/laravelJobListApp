@extends('layouts.app')

@section('content')
<div class="container">

   
        <div class="card">
        <h5 class="card-header">{{ $company->name }}</h5>
            <div class="card-body">
                <div class="card-text">{{ $company->address }}</div>
                <div class="card-text">{{ $company->trade }}</div>
            </div>
            <a href="{{ route('companies.edit', $company->id) }}">edit</a>
        </div>

        <a href="/companies">return to all companies</a>
   


</div>
@endsection