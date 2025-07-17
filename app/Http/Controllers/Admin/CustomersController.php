<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItem;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers_details(){

$customers= Customer::all();

return view('customers',compact('customers'));

    }

    public function Customer_order(){

$customers_Orders = CustomerOrder::all();

return view('customer_order',compact('customers_Orders'));

    }

    public function order_details(){


        $customer_order_items = CustomerOrderItem::all();

        return view('coustomer_order_item',compact('customer_order_items'));


    }

    public function showcustomer($id){

      $customer = Customer::with('orders.items')->findOrFail($id);


        return view('admin-customer-details',compact('customer'));

        


    }
}
