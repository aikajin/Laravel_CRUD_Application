@extends('person.layout')
@section('content')

<div class="card">
  <div class="card-header">
    Person Details
    <a href="{{ url('/person') }}" class="btn btn-outline-primary btn-sm" style="float: right;" title="Back">
      <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
    </a>
  </div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">First Name: {{ $person->first_name }}</h5>
      <p class="card-text">Last Name: {{ $person->last_name }}</p>
      <p class="card-text">Email: {{ $person->email }}</p>
      <p class="card-text">Phone Number: {{ $person->phone_number }}</p>
      <p class="card-text">Password: {{ $person->password }}</p>
      @if($person->profile_image)
        <p class="card-text">Profile Image: <img src="{{ asset('profile_image/' . $person->profile_image) }}" alt="Profile Image" style="max-width: 200px;"></p>
      @else
        <p class="card-text">Profile Image: No Image</p>
      @endif
    </div>
  </div>
</div>

@stop