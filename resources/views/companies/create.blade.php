@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/companies/store" method="POST">
    @csrf
    <div class="container">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter the name of the company">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter the address">
      </div>
      <div class="form-group">
        <label for="trade">Trade</label>
        <input type="text" class="form-control" name="trade" id="trade" placeholder="Add a small description about what the company is doing">
      </div>
      <input type="submit" class="btn btn-primary"></button>
    </div>
  </form>


</div>
@endsection