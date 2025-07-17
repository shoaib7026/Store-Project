@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4 text-center">All Users </h3>
          @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>

        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allUsers as $user)
                            <tr class="text-center">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a class="btn btn-success" href="{{ route('edituser',$user->id) }}">Update</a></td>
                               <td><a class="btn btn-danger" href="{{ route('deleteuser',$user->id) }}">Delete</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
