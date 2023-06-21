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
       
        Category::create ([
            'name'=>$request->Category_Name,
        'description'=>$request->Category_Description
    ]);
        return redirect()->route('category');
        
    }
}
