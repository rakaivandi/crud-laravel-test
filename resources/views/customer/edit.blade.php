@extends('customer.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
        <label>Number</label></br>
        <input type="text" name="number" id="number" value="{{$customers->number}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$customers->gender}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$customers->date}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control"></br>
        <label>Username</label></br>
        <input type="text" name="username" id="username" value="{{$customers->username}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop