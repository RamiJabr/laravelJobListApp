@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route('companies.update', $company->id) }}" method="post"> 
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="container">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="title" class="form-control" name="name" id="name" placeholder="Enter the name of the job" value="{{$company->name}}">
      </div>
      <div class="form-group">
        <label for="description">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Add a small description" value="{{$company->address}}">
      </div>
      <div class="form-group">
        <label for="description">Trade</label>
        <input type="text" class="form-control" name="trade" id="trade" placeholder="Add a small description" value="{{$company->trade}}">
      </div>
      <input type="submit" class="btn btn-primary"></button>
    </div>
  </form>


</div>
@endsection