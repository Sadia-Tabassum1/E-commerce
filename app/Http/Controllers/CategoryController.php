<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function category()
    {
        $category= Category::all();
        return view('backend.pages.category.list',compact('category'));
    }

    public function create()
    {
        return view('backend.pages.category.category_create');
    }
    public function store(Request $request)
    {
        // dd($request->file('image'));
        // dd(date('Ymdhsi'));
        //validation should be there

       if($request->hasFile('image'))
        {
            $image=$request->file('image');//
            $fileName='IMG-'.date('Ymdhsi').'.'.$image->getClientOriginalExtension();//generate file name
// dd($fileName);
            $image->storeAs('/category',$fileName);
        }

        Category::create ([
            'name'=>$request->Category_Name,
            'description'=>$request->Category_Description,
            'image'=>$fileName
    ]);
        return redirect()->route('category');
        
    }
    public function logout()
    {
auth()->logout();

return redirect()->route('admin.do-login')->with('msg','logout successfully.');


    }
}
