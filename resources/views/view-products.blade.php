@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4 text-center">All Products</h3>
          @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category_Id</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th>Action</th>

                        

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $prd)
                            <tr class="text-center">
                                <td>{{ $prd->id }}</td>
                                <td>{{ $prd->name }}</td>
                                <td>{{ $prd->description }}</td>
                                <td>{{ $prd->price }}</td>
                                <td>{{ $prd->category_id }}</td>
                                <td>
    <img src="{{ asset('uploads/products/' . $prd->image) }}" width="80" height="80" alt="Product Image">
</td>


                               
                             <td><a class="btn btn-success" href="{{ route('updateproduct', $prd->id) }}">Update</a></td>
                             <td><a class="btn btn-danger" href="{{ route('deleteproduct',$prd->id) }}">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
