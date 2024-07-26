@extends('person.layout')
@section('content')
 
<div class="card">
  <div class="card-header">
    <div style="text-align: right;">
      <a href="{{ url('/person') }}" class="btn btn-primary">Back</a>
    </div>
    Create Page
  </div>
  <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('person') }}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <label>First Name</label></br>
      <input type="text" name="first_name" id="first_name" class="form-control"></br>
      <label>Last Name</label></br>
      <input type="text" name="last_name" id="last_name" class="form-control"></br>
      <label>Email</label></br>
      <input type="text" name="email" id="email" class="form-control"></br>
      <label>Phone Number</label></br>
      <input type="text" name="phone_number" id="phone_number" class="form-control"></br>
      <label>Password</label></br>
      <input type="password" name="password" id="password" class="form-control"></br>
      <label>Profile Image</label></br>
      <input type="file" name="profile_image" id="profile_image" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@stop
