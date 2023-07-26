<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function product()
    {
        $allProducts = Product::with('categoryname')->paginate(6);

        return view('backend.pages.product.product',compact('allProducts'));
    }
    public function create()
    {
        $categories=Category::all();
        // dd($categories->toArray());
        return view('backend.pages.product.product_create',compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->file('image'));
        // dd(date('Ymdhsi'));
        //validation should be there
        $request->validate([
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);
        
       if($request->hasFile('product_image'))
        {
            $image=$request->file('product_image');//
            $fileName='IMG-'.date('Ymdhsi').'.'.$image->getClientOriginalExtension();//generate file name
        // dd($fileName);
            $image->storeAs('/product',$fileName);
        }

        Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->Product_Description,
            'image'=>$fileName
        ]);

        return redirect()->back()->with('msg','Product Created successfully.');
    }
    public function delete($id)
    {
        $products=Product::find($id);
        $products->delete();
        return redirect()->route('product')->with('msg','Product Delete Success.');

    }


    public function report(){
        return view('backend.pages.report.productReport');
    }

    public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $products=Product::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.productReport',compact('products'));

    }
    
}
