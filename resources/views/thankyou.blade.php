@include('components.header')


<div class="container py-5 mt-5 mb-5">
    <div class="text-center mb-4">
        <h2 class="text-success">Thank You for Your Order!</h2>
        <p class="lead">Your order has been placed successfully. Below are your order details:</p>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Customer Information</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li><strong>Name:</strong> {{ $order->customer->name }}</li>
                <li><strong>Phone:</strong> {{ $order->customer->phone }}</li>
                <li><strong>Email:</strong> {{ $order->customer->email }}</li>
                <li><strong>Address:</strong> {{ $order->customer->address }}, {{ $order->customer->city }} - {{ $order->customer->postal_code }}</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Order Summary</h5>
        </div>
        <div class="card-body">
            <p><strong>Order ID:</strong> #{{ $order->id }}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
            <p><strong>Note:</strong> {{ $order->note ?? 'N/A' }}</p>

            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Product Name</th>
                        <th>Price (PKR)</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ number_format($item->price) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($item->subtotal) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-light">
                     <tr>
                        <th colspan="3" class="text-end">Delivery Charges:</th>
                        <th>{{ ($order->delivery_charges) }}</th>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-end">Payable Amount:</th>
                        <th>{{ number_format($order->total_amount) }} PKR</th>
                    </tr>
                </tfoot>
            </table>

            <a href="{{ route('index') }}" class="btn btn-success">Continue Shopping</a>

        </div>
    </div>
</div>

@include('components.footer')

