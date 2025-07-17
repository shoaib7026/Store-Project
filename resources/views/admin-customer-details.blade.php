@extends('layouts.admin')

@section('content')
<div class="content d-flex justify-content-center">
    <div class="col-md-10">
        <h3 class="mb-4 text-center">Customer Details</h3>

        {{-- Customer Info Table --}}
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>Customer Info</h5>
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Orders Table --}}
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>Customer Orders</h5>
                @if($customer->orders && $customer->orders->count())
                    <table class="table table-bordered text-center">
                        <thead class="table-info">
                            <tr>
                                <th>Order ID</th>
                                <th>Total Amount</th>
                                <th>Payment Method</th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-muted">No orders found for this customer.</p>
                @endif
            </div>
        </div>

        {{-- Order Items Table (All Items from All Orders) --}}
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>Customer Order Items</h5>
                @php
                    $hasItems = false;
                @endphp

                <table class="table table-bordered text-center">
                    <thead class="table-success">
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer->orders as $order)
                            @if($order->items && $order->items->count())
                                @php $hasItems = true; @endphp
                                @foreach($order->items as $item)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach

                        @if(!$hasItems)
                            <tr>
                                <td colspan="4">No order items found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
