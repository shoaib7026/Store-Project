<?php

use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Usercontroller;
use App\Http\Controllers\Admin\CategoryControler;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsControler::class , 'index'])->name('/');

Route::get('/dashboard', [ProductController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin',[Usercontroller::class,'admindashboard'])->name('admin');



Route::get('index',[ProductsControler::class,'index'])->name('index');


Route::get('product',[ProductController::class,'allproducts'])->name('product');


Route::get('about', function(){
    return view('about');
});
Route::get('contact', function(){
    return view('contact');
});

Route::get('product-detail.php', function(){
    return view('product-detail');
});

Route::get('shoping-cart.php', function(){
    return view('shoping-cart');
});

// ye yaha se humne jo components wala admin panel tha usky route uthaey he or sidebar me jo customer or customers orders ky route yaha he starat he

Route::get('customers',[CustomersController::class,'customers_details'])->name('customers');

// ye customers order wala route he 

Route::get('customers_orders',[CustomersController::class,'Customer_order'])->name('customers_orders');

// customers order items wala route yaha se he 

Route::get('customers_orders_items',[CustomersController::class,'order_details'])->name('customers_orders_items');

Route::get('admincustomerdetailsview/{id}',[CustomersController::class,'showcustomer'])->name('admincustomerdetailsview');

Route::get('logout',function(){
Auth::logout();
return redirect('login')->with('success','logout out Succesfully');


});

Route::get('adminlogout',function(){
return view('login');
})->name('adminlogout');





// yaha se admin add user wala route shoro he jo main dashboard ky side bar se araha he 
Route::get('adminadduser',[Usercontroller::class,'adduser'])->name('adminadduser');

// admin jb user ko add kreyga uska post ka function 

Route::post('useraddbyadmin',[Usercontroller::class,'usrerfromdashboard'])->name('useraddbyadmin');

// View Users Wala route yaha se shoro he admin jb user ko dekhna chahy 

Route::get('viewusers',[Usercontroller::class,'allusers'])->name('viewusers');

// ye yaha se edit user wala route shoro he 
Route::get('edituser{id}',[Usercontroller::class,'selectuser'])->name('edituser');

// ye ab yaha se hm edituser waly form ka jo action he mean jaha user ko update krna he wo route he  
Route::post('updateuser{id}',[Usercontroller::class,'upduser'])->name('updateuser');

// ye yaha se userdelete wala route shoro he jo admin kreyga 
Route::get('deleteuser{id}',[Usercontroller::class,'dltuser'])->name('deleteuser');




// category wala route 

Route::get('addcategory',function(){
    return view('addcategories');

})->name('addcategory');

Route::post('categorystore', [CategoryControler::class,'adddata'])->name('categorystore');

Route::get('viewcategory',[CategoryControler::class,'showcategory'])->name('viewcategory');

// category edit wala route yaha se shoro he 

Route::get('category-edit{id}',[CategoryControler::class,'edit'])->name('category-edit');

// category update wala route yaha se shoro he 

Route::post('caetgory-update/{id}',[CategoryControler::class,'update'])->name('caetgory-update');

// yaha se category delete wala kam shoro he 

Route::get('category-delete{id}',[CategoryControler::class,'delete'])->name('category-delete');



// yaha se dashboard ky products ka kam shoro he 






// ye add product wala route he  ye yaha se hm addproduct wala kam kr rahy he jb koi add product pr click kry to hmy categories ko form me dynamically show krwana he is leye hm categories ko compact kr rahy he addproduct pr taky waha aesy access kr paey

Route::get('addproduct',[CategoryControler::class,'category'])->name('addproduct');

// product yaha is route pr insert ho raha he 

Route::post('insertproduct',[ProductController::class,'insertproduct'])->name('insertproduct');

// product view ka route yaha se shoro he jb koi dashboard se view product pr click kry to ye route chaeleyga 

Route::get('viewproduct',[ProductController::class,'selectproducts'])->name('viewproduct');

// yaha se update product ka kamn shoro he 
Route::get('updateproduct/{id}',[ProductController::class,'updateproduct'])->name('updateproduct');

// ye update krny ky bad wala post ka route he product ka 

Route::post('updprodcut{id}',[ProductController::class,'updatedone'])->name('updprodcut');

// yaha se product delete wala route start he 

Route::get('deleteproduct{id}',[ProductController::class,'dltproduct'])->name('deleteproduct');

// ye yaha se home page ka route shoro he jis me product show ho rahy he 

Route::get('home',[ProductController::class,'homepage'])->name('home');

// Cart Wala Kam Yaha Se Shoro he Jo Components se leya he 

// add to cart waly ka route yaha se start he jo details waly modal se araha he  
Route::post('add-to-cart/{id}',[CartController::class,'addtocart'])->name('add-to-cart');


// ye route cart icon ka he jo navbar me hoga cart k leye 
Route::get('cart',[CartController::class,'viewcart'])->name('cart');

// ye cehckout waly page ka route he 

Route::get('checkout',[CartController::class,'checkout'])->name('checkout');


// Ye route AJAX request ko handle karega jab user plus/minus press kareyga cart se 
Route::post('/update-cart/{id}', [CartController::class, 'updateCart']);

// ye cart se remove kreyga product ko 
Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');


// ye cehckout waly page ka route he 

Route::get('checkout',[CartController::class,'checkout'])->name('checkout');


// ye jb chekcout waly page se user placeorder kreyga 

Route::post('/ordering', [CartController::class, 'Ordering'])->name('ordering');


// web.php
Route::get('/thankyou/{order_id}', [CartController::class, 'thankyou'])->name('thankyou');

// Contact Page Sending route 

Route::post('contact.send',[ContactController::class , 'Send'])->name('contact.send');


// STEP 2: Intended URL ko manually set karne wala route
Route::get('/set-intended-and-login', function () {
    session(['url.intended' => route('checkout')]); // checkout page ka address yaad rakh lo
    return redirect()->route('login'); // phir login page pe bhej do
})->name('set-intended-and-login');



require __DIR__.'/auth.php';
