<?php

namespace App\Http\Controllers;
use  App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function home()
 {
   $allProducts=Product::all();
    return view('frontend.pages.all',compact('allProducts'));
 }

 public function search()
    {
      $searchKey=request()->search;

      $allProducts=Product::where('name','LIKE','%'.$searchKey.'%')->get();

      return view('frontend.pages.search-product',compact('allProducts','searchKey'));


    }
    
    
}
