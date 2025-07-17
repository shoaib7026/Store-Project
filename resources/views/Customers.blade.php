@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4 text-center">Customers</h3>
          @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal-code</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr class="text-center">
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->user_id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email}}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->city }}</td>
                                <td>{{ $customer->postal_code}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
