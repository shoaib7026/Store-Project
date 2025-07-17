@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="content">
    <h3 class="mb-4 text-center">Dashboard Overview</h3>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-4">
                <h5><i class="bi bi-box-seam me-2 text-primary"></i> Total Products</h5>
                <p class="fs-3 fw-bold text-primary">{{ $productCount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <h5><i class="bi bi-tags me-2 text-success"></i> Total Categories</h5>
                <p class="fs-3 fw-bold text-success">{{ $categorycount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <h5><i class="bi bi-people me-2 text-warning"></i> Total Users</h5>
                <p class="fs-3 fw-bold text-warning">{{ $usercount }}</p>
            </div>
        </div>
         <div class="col-md-4">
            <div class="card p-4">
                <h5><i class="bi bi-box me-2 text-danger"></i> Total Orders</h5>
                <p class="fs-3 fw-bold text-danger">{{ $orders }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
