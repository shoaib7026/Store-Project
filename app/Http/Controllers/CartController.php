<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItem;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
  
    // ye jo modal se hm session me details bhej rahy he uska function he 
    public function addtocart(Request $request , $id){

 $productid = $id;

//  form ky inout se quantity ly rahy he hm is me 
 $quantity = $request->input('quantity');
// is me hm db se product find kr  rahy he 
 $product = product::findOrFail($productid);

//  ye hm cart bana rahy he session me  yaha pr pehly check ho raha he k cart bana howa he too theak warna new array bana do khali 

$cart = session()->get('cart',[]);

// kya jo product user ne add kiya hai wo pehle se cart me maujood hai?
// Agar hai → to uski quantity increase karo.
// Agar nahi hai → to us product ki sari info lekar new entry banao cart me.

if(isset($cart[$productid])){

    $cart[$productid]['Product_Quantity'] += $quantity;

}
else{
    $cart[$productid] = [
        'Product_Id' => $productid,
        'Product_Name' => $product->name,
        'Product_Price' => $product->price,
        'Product_Description' => $product->description,
        'Product_Image' => $product->image,
        'Product_Quantity' => $quantity,


    ];

}
session()->put('cart', $cart);

return redirect()->back()->with('success', 'Product added to cart');






    }



    // ye cart view wala he mean user icon pr click kreyga or usy cart nazr aeyga 

    public function viewcart(){
         $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
    }





// ye price update krny ky leye he or quantity ko cart page me or iska response hm json me bhej rahy he ajax se handle hoga aagey cart.js file me 
    public function updateCart(Request $request, $id)
{
    $quantity = $request->input('quantity');
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['Product_Quantity'] = $quantity;

        session()->put('cart', $cart);

        // Subtotal nikaalo
        $subtotal = $cart[$id]['Product_Price'] * $quantity;

        // Total nikaalo
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['Product_Price'] * $item['Product_Quantity'];
        }

        return response()->json([
            'success' => true,
            'subtotal' => $subtotal,
            'total' => $total
        ]);
    }

    return response()->json(['success' => false]);
}

// ye cart se remove kreyga product ko same ajax
public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);

        // total update
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['Product_Price'] * $item['Product_Quantity'];
        }

        return response()->json([
    'success' => true,
    'total' => $total,
    'cartCount' => count($cart), // 🔥 Yeh line zaroori hai badge update ke liye
]);
    }

    return response()->json(['success' => false]);
}


// ye proceed To checkout waala kam he  

public function checkout(){

$cart = session()->get('cart');

if(!$cart || count($cart) == 0){

    return redirect()->back()->with('error' , 'Your Cart is Empty');
}
else{
    $total = 0 ;
foreach ($cart as $item) {
    
    $total += $item['Product_Price'] * $item['Product_Quantity'];
}
    return view('checkout',compact('cart' , 'total'));
}



}



public function Ordering(Request  $request){

    $cart = session()->get('cart');

    if (!$cart || count($cart) == 0) {
        return redirect()->back()->with('error', 'Your cart is empty!');
    }

    $user = auth()->user(); // ✅ Get current logged-in user

    // ✅ Step 1: Check if customer already exists for this user
    $customer = Customer::firstOrCreate(
        ['user_id' => $user->id],
        [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code
        ]
    );

    // Step 2: Calculate total
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['Product_Price'] * $item['Product_Quantity'];
    }

    $delverycharges = 200;
    $grandTotal = $total + $delverycharges;

    // Step 3: Save order info
    $order = new CustomerOrder();
    $order->customer_id = $customer->id;
    $order->total_amount = $grandTotal;
    $order->delivery_charges = $delverycharges;
    $order->payment_method = $request->payment_method;
    $order->note = $request->note;
    $order->save();

    // Step 4: Save order items
    foreach ($cart as $item) {
        $orderItem = new CustomerOrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_name = $item['Product_Name'];
        $orderItem->price = $item['Product_Price'];
        $orderItem->quantity = $item['Product_Quantity'];
        $orderItem->subtotal = $item['Product_Price'] * $item['Product_Quantity'];
        $orderItem->save();
    }

    // Step 5: Send email
    Mail::send('orderemail', [
        'customer' => $customer,
        'cart' => $cart,
        'total' => $total,
        'grandtotal' => $grandTotal,
        'order' => $order, 
    ], function ($message) use ($customer, $order) {
        $message->to($customer->email)
                ->subject('Your Order #'.$order->id.' has been placed')
                ->from('your_email@gmail.com');
    });

    // Step 6: Clear cart
    session()->forget('cart');

    // Step 7: Redirect
    return redirect()->route('thankyou', ['order_id' => $order->id]);
}


public function thankyou($order_id)
{
    $order = CustomerOrder::with('customer', 'items')->findOrFail($order_id);

    return view('thankyou', compact('order'));
}



}
