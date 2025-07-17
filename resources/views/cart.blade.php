@include('components.header')



<div class="container mt-5 mb-4 " id="cart-blade">
    <h2 class="mb-4 text-center">Your Shopping Cart</h2>



    @php
        $cart = session('cart', []);
        $total = 0;
    @endphp

    @if(count($cart) > 0)
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th style="width: 150px;">Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                        @php
                            $subtotal = $item['Product_Price'] * $item['Product_Quantity'];
                            $total += $subtotal;
                        @endphp
                        <tr id="row_{{ $item['Product_Id'] }}">
                            <td>
                                <img src="{{ asset('uploads/products/' . $item['Product_Image']) }}" class="img-thumbnail"
                                    style="width: 80px;" />
                            </td>
                            <td id="name_{{ $item['Product_Id'] }}">{{ $item['Product_Name'] }}</td>
                            <td id="price_{{ $item['Product_Id'] }}">PKR:{{ $item['Product_Price'] }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <button id="minusBtn-cart_{{ $item['Product_Id'] }}" type="button"
                                        class="btn btn-sm btn-outline-secondary">-</button>

                                    <input id="qtyInput-cart_{{ $item['Product_Id'] }}" type="number"
                                        class="form-control form-control-sm text-center mx-1"
                                        value="{{ $item['Product_Quantity'] }}" min="1" style="width: 60px;">

                                    <button id="plusBtn-cart_{{ $item['Product_Id'] }}" type="button"
                                        class="btn btn-sm btn-outline-secondary">+</button>
                                </div>

                            </td>
                            <td id="subtotal_{{ $item['Product_Id'] }}">PKR:{{ $subtotal }}</td>
                            <td>
                                <button id="removeBtn-cart_{{ $item['Product_Id'] }}" class="btn btn-sm btn-danger">
                                    Remove
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        <!-- Total & Checkout -->
        <div class="d-flex justify-content-between align-items-center mt-4 mb-5">
            <h5>Total: <strong id="totalAmount">PKR:{{ $total }}</strong></h5>
            <a href="{{ auth()->check() ? route('checkout') : route('set-intended-and-login') }}"
                class="btn btn-primary px-4">Proceed to Checkout</a>
        </div>

    @else
        <div class="alert alert-warning">Your cart is empty.</div>
    @endif
</div>


@include('components.footer')