@include('components.header')


<div class="container mt-5 mb-5">
  <div class="py-5 text-center">
    <h2>Checkout</h2>
    <p class="lead">Please review your cart and confirm your details.</p>
  </div>

  <div class="row">
    <!-- Order Summary -->
 <div class="col-md-4 order-md-2 mb-4">
  <h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-dark">Your cart</span>

    @php
      $count = $cart ? count($cart) : 0;
    @endphp

    <span class="badge bg-danger rounded-pill">{{ $count }} {{ Str::plural('Item', $count) }}</span>
  </h4>

  <!-- Cart Table -->
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Item</th>
          <th>Quantity</th>
          <th>Price (PKR)</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cart as $item)
          <tr>
            <td>
              <strong>{{ $item['Product_Name'] }}</strong><br>
              <small class="text-muted">{{ $item['Product_Description'] }}</small>
            </td>
            <td>{{ $item['Product_Quantity'] }}</td>
            <td>{{ $item['Product_Price'] }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><strong>Total</strong></td>
          <td><strong>{{ $total }}</strong></td>
          <tr>
            <td colspan="2"><strong>Delevery Charges:</strong></td>
            <td> <strong> Pkr: 200</strong> </td>

          </tr>

          <tr>
            <td colspan="2"> <strong>Payable Amount</strong> </td>
            <td> <strong>{{ $total + 200 }}</strong></td>
          </tr>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

    <!-- Checkout Form -->
    <div class="col-md-8 order-md-1 mb-5">
      <h4 class="mb-3">Billing Details</h4>
    

      <form  action="{{ route('ordering') }}" method="POST">

@csrf
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="firstName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="firstName" name="name" placeholder="Your name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="03XX-XXXXXXX" required>
    </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email (optional)</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="e.g., Karachi" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="postal_code" class="form-label">Postal Code</label>
      <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="e.g., 74000" required>
    </div>
  </div>

  <div class="mb-3">
    <label for="note" class="form-label">Note (Optional)</label>
    <textarea class="form-control" name="note" id="note" rows="3" placeholder="Any delivery instructions..."></textarea>
  </div>

  <hr class="mb-4">
  <h4 class="mb-3">Payment</h4>

  <div class="form-check">
    <input id="cod" name="payment_method" value="COD" type="radio" class="form-check-input" checked required>
    <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
  </div>

  <!-- Future payment options can go here -->

  <hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Place Order</button>
</form>







    </div>
  </div>

  
</div>


@include('components.footer')