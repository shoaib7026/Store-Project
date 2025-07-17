@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-6">
        <h3 class="mb-4 text-center">Edit Category</h3>

        <form action="{{ route('caetgory-update',$category->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
