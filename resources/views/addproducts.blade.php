@extends('layouts.admin')

@section('content')
<div class="container col-md-6 mt-5">
    <h3 class="mb-4">Add New Product</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('insertproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" >
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ old('price') }}" class="form-control" >
             @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description"  class="form-control" >{{ old('description') }}</textarea>
             @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id">Select Category</label>
            <select name="category_id" class="form-select" >
                <option value="{{ old('category_id') }}">-- Select Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
              @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="mb-3">
    <label for="image">Product Image</label>
    <input type="file" name="image" class="form-control">
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
