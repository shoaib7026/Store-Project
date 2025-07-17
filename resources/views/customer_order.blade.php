@extends('layouts.admin')

@section('content')
    <div class="content d-flex justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-4 text-center">Customers_Orders</h3>
            @if(session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Customer_id</th>
                                <th>Delivery Charges</th>
                                <th>Total_Amount</th>
                                <th>Payment_Method</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers_Orders as $C_order)
                                <tr class="text-center">
                                    <td>{{ $C_order->id }}</td>


                                    <td> <a
                                           id="admin-customer-order-id" href="{{ route('admincustomerdetailsview', $C_order->customer_id) }}">{{ $C_order->customer_id }}</a>
                                    </td>

                                    <td>{{ $C_order->delivery_charges }}</td>

                                    <td>{{ $C_order->total_amount }}</td>
                                    <td>{{ $C_order->payment_method }}</td>
                                    <td>{{ $C_order->note }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection