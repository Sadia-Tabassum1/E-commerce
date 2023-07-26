<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function user()
    {
      
        return view('frontend.pages.login');
    }

    public function registration() 
    {
      return view('frontend.pages.registration');  
    }
    public function do_registration() 
    {
      return view('frontend.pages.do_registration');  
    }


    public function customer_store(Request $request)
    {
        
        // $request->validate([

        // ]);
        
      //  if($request->hasFile('product_image'))
      //   {
      //       $image=$request->file('product_image');//
      //       $fileName='IMG-'.date('Ymdhsi').'.'.$image->getClientOriginalExtension();//generate file name
        // dd($fileName);
            // $image->storeAs('/product',$fileName);
        Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password

        ]);
        return redirect()->back()->with('msg','Registration successfully done.');  
    }
    public function customer() 
    {
      return view('frontend.pages.customer/login');  
    }


    public function dologin(Request $request) 
    {
      // dd($request->all());  
      $credentials=$request->except('_token');
      
      if(auth()->guard('customer')->attempt($credentials));
      {
        return redirect()->route('home');
      }
      return redirect()->back()->with('msg','Login Success');
      
    }

    // return view('frontend.pages.dologin');  
}
