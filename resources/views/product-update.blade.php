@extends('layouts.admin')

@section('content')
<div class="container col-md-6 mt-5">
    <h3 class="mb-4">Update Product</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('updprodcut',$selectedproduct->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="mb-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" value="{{ $selectedproduct->name }}" class="form-control" >
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ $selectedproduct->price }}" class="form-control" >
             @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description"  class="form-control" >{{ $selectedproduct->description }}</textarea>
             @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id">Select Category</label>
         <select name="category_id" class="form-select">
    <option disabled selected>-- Select Category --</option>
    @foreach($categories as $category)
    <!-- Agar product ki category id == loop me chal rahi category id ho → to selected attribute lagado. -->
        <option value="{{ $category->id }}" {{ $selectedproduct->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
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

    @if($selectedproduct->image)
        <div class="mt-2">
            <img src="{{ asset('uploads/products/' . $selectedproduct->image) }}" width="120" alt="Current Image">
        </div>
    @endif
</div>


        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
