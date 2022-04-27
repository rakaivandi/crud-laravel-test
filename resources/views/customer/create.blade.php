@extends('customer.layout')
@section('content')
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Number</label></br>
        <input type="text" name="number" id="number" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Username</label></br>
        <input type="text" name="username" id="username" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop