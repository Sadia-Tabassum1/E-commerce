<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HijabController extends Controller
{
    public function hijab()
    {
        return view('backend.pages.hijab.list_hijab');
    }
}
