@extends('layouts.admin')

@section('content')
<div class="content">
    <h3 class="mb-4 text-center">Add New Category</h3>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('categorystore') }}" method="POST" class="p-4 border rounded bg-white shadow-sm">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
