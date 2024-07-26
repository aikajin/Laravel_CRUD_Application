@extends('person.layout')
@section('content')

<div class="card">
  <div class="card-header">
    Edit Person
    <div style="text-align: right;"> 
      <a href="{{ url('/person') }}" class="btn btn-outline-primary btn-sm" title="Back">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
      </a>
    </div>
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

    <form action="{{ url('person/' . $person->id) }}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{ $person->id }}" />
      <label>First Name</label><br>
      <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}" class="form-control"><br>
      <label>Last Name</label><br>
      <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}" class="form-control"><br>
      <label>Email</label><br>
      <input type="text" name="email" id="email" value="{{ $person->email }}" class="form-control"><br>
      <label>Phone Number</label><br>
      <input type="text" name="phone_number" id="phone_number" value="{{ $person->phone_number }}" class="form-control"><br>
      <label>Password</label><br>
      <input type="text" name="password" id="password" value="{{ $person->password }}" class="form-control"><br>
      <label>Profile Image</label><br>
      @if($person->profile_image)
        <img src="{{ asset('profile_image/' . $person->profile_image) }}" alt="Profile Image" style="max-width: 200px;"><br>
      @endif
      <input type="file" name="profile_image" id="profile_image" class="form-control"><br>
      <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  </div>
</div>

@stop
