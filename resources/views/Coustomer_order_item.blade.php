@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4 text-center">Customers Orders Items</h3>
          @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Order_Id</th>
                            <th>Product_Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer_order_items as $C_O_item)
                            <tr class="text-center">
                        <td>{{ $C_O_item->id }}</td>
                        <td>{{ $C_O_item->order_id }}</td>
                        <td>{{ $C_O_item->product_name }}</td>
                        <td>{{ $C_O_item->price }}</td>
                        <td>{{ $C_O_item->quantity }}</td>
                        <td>{{ $C_O_item->subtotal }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
