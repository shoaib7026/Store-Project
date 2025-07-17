<h2>Order Confirmation</h2>

<p>Dear {{ $customer->name }},</p>
<p>Thank you for your order. Your Order ID is: <strong>#{{ $order->id }}</strong></p>

<p><strong>Order Summary:</strong></p>
<ul>
    @foreach($cart as $item)
        <li>{{ $item['Product_Name'] }} x {{ $item['Product_Quantity'] }} = Rs {{ $item['Product_Price'] * $item['Product_Quantity'] }}</li>
    @endforeach
</ul>

<p><strong>Total:</strong> Rs {{ $total }}</p>
<p><strong>Delivery Charges: PKR: 200</strong></p>
<p><strong>Payable Amount:</strong> Rs {{ $grandtotal }}</p>


<p>We’ll process your order soon. Thank you for shopping with us!</p>
