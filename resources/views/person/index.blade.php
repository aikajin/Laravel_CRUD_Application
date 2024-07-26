@extends('person.layout')
@section('content')
    <div class="container-fluid"> <!-- Use container-fluid to occupy the whole screen -->
        <div class="row">
            <div class="col-md-12"> <!-- Use col-md-12 to occupy the whole width -->
                <div class="card">
                    <div class="card-header">
                        <h2>CRUD Application</h2>
                    </div>
                    <div class="card-body">
                        <div style="text-align: right;"> 
                            <a href="{{ url('/person/create') }}" class="btn btn-outline-success btn-sm" title="Add New Person">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Profile Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($person as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>
                                            @if($item->profile_image)
                                                <img src="{{ asset('profile_image/' . $item->profile_image) }}" alt="Profile Image" style="max-width: 100px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/person/' . $item->id) }}" title="View Person"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/person/' . $item->id . '/edit') }}" title="Edit Person"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/person' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Person" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
