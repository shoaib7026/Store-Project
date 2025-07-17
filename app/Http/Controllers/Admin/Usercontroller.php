<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\CustomerOrder;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function registeruser(Request $request){

        $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|string|min:6|confirmed',

        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),

        ]);

         Auth::login($user);

return redirect()->route('dashboard')->with('success', 'Registration successful!');

    }


    // ye yaha se admin user ko add kreyga is function se 

    public function adduser(){
    

        return view('admin-add-user');
    }

// yaha se iska post function jo admin add kreyga user ko 

public function usrerfromdashboard(Request $request){


 $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|string|min:6|confirmed',

        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),

        ]);

        return redirect()->route('adminadduser')->with('success','User Registerd Succesfully');

}

// ye yaha se view users wala function start he 

public function allusers(){
    $allUsers = User::all();

    return view('view-user',compact('allUsers'));

}

// ye yaha se select user wala route shoro he 

public function selectuser($id){
     
    $selcteduser = User::find($id);

    return view('edit-user',compact('selcteduser'));


}


// ye yaha se user update ho raha he 

public function upduser(Request $request,$id){

$user = User::find($id);


  $avlidated= $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users,email,' . $user->id ,
        'password'=>'required|string|min:6|confirmed',

        ]);

        $user->update($avlidated);

        return redirect()->route('viewusers')->with('success','User Updated Succefully');

}

// ye yaha se user delete wala function start he 

public function dltuser($id){
    $user = User::find($id);

    $user->delete();
   return redirect()->route('viewusers')->with('success','User deleted Succefully');

}

public function admindashboard(){


    $productCount = product::count();

    $categorycount = category::count();

    $usercount = User::count();

    $orders = CustomerOrder::count();
    

    return view('admin-dashboard',compact('productCount', 'categorycount','usercount','orders'));

}


}