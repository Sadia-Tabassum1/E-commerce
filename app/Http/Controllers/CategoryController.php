<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function category()
    {
        // $category= Category::all();
        $category=Category::paginate(5);
        return view('backend.pages.category.list',compact('category'));
    }

    public function create()
    {
        return view('backend.pages.category.create_category');
    }
    public function store(Request $request)
    {
        // dd($request->file('image'));
        // dd(date('Ymdhsi'));
        //validation should be there
        $request->validate
        ([
            'Category_Name' =>'required',
            'Category_Description' =>'required',
        ]);
        

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
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.pages.category.edit_category',compact('category'));
    }
    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category')->with('msg','Category Delete Success.');

    }
    public function update(Request $request)
    {
        $request->validate
        ([
            'Category_Name' =>'required',
            'Category_Description' =>'required',
        ]);
        

//        if($request->hasFile('image'))
//         {
//             $image=$request->file('image');//
//             $fileName='IMG-'.date('Ymdhsi').'.'.$image->getClientOriginalExtension();//generate file name
// // dd($fileName);
//             $image->storeAs('/category',$fileName);
//         }

        Category::update ([
            'name'=>$request->Category_Name,
            'description'=>$request->Category_Description
    ]);
        return redirect()->route('category');

    }

}
