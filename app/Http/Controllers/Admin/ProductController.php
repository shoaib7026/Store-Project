<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function insertproduct(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'category_id' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:10000',
    ]);

    $file = $request->file('image');
    $filename = $file->getClientOriginalName(); 
    $file->move(public_path('uploads/products/'), $filename);

    $validatedData['image'] = $filename;

    product::create($validatedData);

    return redirect()->route('viewproduct')->with('success', 'Product Added Successfully!');
}


    // ab yaha se view product wala kam start he 

    public function selectproducts(){
        $products = product::all();
        return view('view-products',compact('products'));
    }

    // yaha se update product wala kam shoro he 

    public function updateproduct($id){
        $selectedproduct = product::find($id);

        $categories = category::all();

        return view('product-update',compact('selectedproduct','categories'));
    }

    // ye yaha se update krny wala post ka function he 

   public function updatedone(Request $request, $id)
{
    $validateddata = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'category_id' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000' // optional image
    ]);

    $Product = product::find($id);

    // Image upload handle
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        // $ext = $file->getClientOriginalExtension();
     $filename = $file->getClientOriginalName();

        $file->move(public_path('uploads/products'), $filename);

        // old image delete if exists (optional)
        if ($Product->image && file_exists(public_path('uploads/products/' . $Product->image))) {
            unlink(public_path('uploads/products/' . $Product->image));
        }

        $Product->image = $filename;
    }

    // Update other fields
    $Product->name = $validateddata['name'];
    $Product->description = $validateddata['description'];
    $Product->price = $validateddata['price'];
    $Product->category_id = $validateddata['category_id'];

    $Product->save();

    return redirect()->route('viewproduct')->with('success', 'Product Update Successfully');
}

    // yaha se product delete wala function start he 

    public function dltproduct($id){
        $product = product::find($id);

        $product->delete();

        return redirect()->route('viewproduct')->with('success','Product Deleted Successfully');
    }

    public function dashboard(){
    $productCount= product::count();
    
    $categorycount = category::count();

    $usercount = User::count();

    return view('dashboard',compact('productCount','categorycount','usercount'));

    }

public function homepage(){
    $allproducts = product::all();
    return view('home',compact('allproducts'));
}


// ye yaha se product page ka route he jo sary products show kr raha he 

public function allproducts(){

    $products = product::all();

    $categories = category::all();

    return view('product',compact('products','categories'));


}



}
