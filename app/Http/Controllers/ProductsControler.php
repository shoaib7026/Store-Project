<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductsControler extends Controller
{
    public function index(){

       $products = product::take(12)->get();

       $catgeories = category::all();

       return view('index',compact('products','catgeories'));


    }
}
