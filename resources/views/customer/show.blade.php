@extends('customer.layout')
@section('content')
<div class="card">
  <div class="card-header">A Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $customers->name }}</h5>
        <p class="card-text">Address : {{ $customers->address }}</p>
        <p class="card-text">Number : {{ $customers->number }}</p>
        <p class="card-text">Gender : {{ $customers->gender }}</p>
        <p class="card-text">Date : {{ $customers->date }}</p>
        <p class="card-text">Email : {{ $customers->email }}</p>
        <p class="card-text">Username : {{ $customers->username }}</p>
  </div>
      
    </hr>
  
  </div>
</div>