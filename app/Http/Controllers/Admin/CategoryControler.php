<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;

use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function adddata(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Category::create([
        'name' => $request->name,
    ]);

    return redirect()->back()->with('success', 'Category added successfully!');
}

public function showcategory(){
    $categories = category::all();
    return view('viewcategory' , compact('categories') );
}

// update function yaha se shoro he 

public function edit($id){
    $category = category::find($id);
    return view('category-edit',compact('category'));
}

public function update(Request $request, $id){
    $category = category::find($id);

    $category->name = $request->name;

    $category->save();

    return redirect()->route('viewcategory')->with('success','Category update Succesfully');


}

// yaha se category delete wala function start he 

public function delete($id){
    $category = category::find($id);
    $category->delete();

   return redirect()->route('viewcategory')->with('success','Category delete Succesfully');


}

// ye yaha se hm addproduct wala kam kr rahy he jb koi add product pr click kry to hmy categories ko form me dynamically show krwana he is leye hm categories ko compact kr rahy he addproduct pr taky waha aesy access kr paey 

public function category(){

    $categories = category::all();
    return view('addproducts',compact('categories'));

}

}
