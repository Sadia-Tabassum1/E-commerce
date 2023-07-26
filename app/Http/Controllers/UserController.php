<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
         return view("backend.pages.login");
        
    }
    public function loginf(Request $request)
    {
        $request->validate
        ([
        'email'=>'required|email',
        'password'=>'required|min:6'
         ]); 
        // $credentials=$request->except(['_token']);

        if(auth()->attempt(request()->only(['email','password'])))
        {
            return redirect()->Route('dashboard')->with('msg','Login Success.');
        }
        return redirect()->back()->with('msg','Invalid login information');

    }

   public function logout() 
   {

    Auth::logout();
    return redirect()->route('login')->with('msg','Logout success');

   }
}
