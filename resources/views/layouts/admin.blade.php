<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/personal.css') }}">


    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            position: fixed;
            padding-top: 60px;
        }

        .sidebar .nav-link {
            color: #ccc;
            padding: 15px 30px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #495057;
            color: #fff;
        }

        .topbar {
            height: 60px;
            background:  #495057;
            color: #fff;
            padding: 0 30px;
            position: fixed;
            left: 250px;
            right: 0;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 999;
        }

        .content {
            margin-left: 100px;
            padding: 80px 30px 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .logout-btn {
            background: #fff;
            color: #0d6efd;
            border: none;
            padding: 5px 12px;
            border-radius: 5px;
        }

        .logout-btn:hover {
            background-color:rgb(255, 8, 0);
            color: white;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar d-flex flex-column position-fixed">
    <h4 class="text-white text-center mb-4">Admin Panel</h4>
    <a href="{{ route('dashboard') }}" class="nav-link active"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="{{ route('addproduct') }}" class="nav-link"><i class="bi bi-plus-circle"></i> Add Product</a>
    <a href="{{ route('viewproduct') }}" class="nav-link"><i class="bi bi-box-seam"></i> All Products</a>
    <a href="{{ route('addcategory') }}" class="nav-link"><i class="bi bi-plus-circle"></i> Add Categories</a> <!-- Ye wala naya link -->
    <a href="{{ route('viewcategory') }}" class="nav-link"><i class="bi bi-tags"></i> All Categories</a> <!-- Ye wala naya link -->

    <a href="{{ route('adminadduser') }}" class="nav-link"><i class="bi bi-plus-circle"></i> Add Users</a>
    <a href="{{ route('viewusers') }}" class="nav-link"><i class="bi bi-people"></i> All Users</a>

    <a href="{{ route('customers') }}" class="nav-link"><i class="bi bi-people"></i> Customers</a>
    <a href="{{ route('customers_orders') }}" class="nav-link"><i class="bi bi-cart"></i> Customers_Orders</a>
    <a href="{{ route('customers_orders_items') }}" class="nav-link"><i class="bi bi-file-earmark-text"></i> Customers_Orders</a>





</div>

<!-- Topbar -->
<div class="topbar d-flex justify-content-between align-items-center">
    <div>Welcome, {{ Auth::user()->name }}</div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout-btn" type="submit">Logout</button>
    </form>
</div>

<div class="content">
    @yield('content')  {{-- Yeh jagah har page ka content ayega --}}
</div>



</body>
</html>
