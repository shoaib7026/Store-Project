@extends('layouts.admin')

@section('content')
<div class="container col-md-6 mt-5">

    <h3 class="mb-4 text-center">Add User</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card p-4 shadow-sm">
        <form action="{{ url('useraddbyadmin') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Enter your full name">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email" placeholder="Enter your email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
            </div>

            <button type="submit" class="btn btn-primary ">Add User</button>
        </form>
    </div>
</div>
@endsection
