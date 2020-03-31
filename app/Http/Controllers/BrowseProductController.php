<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowseProductController extends Controller
{
    public function product(){
        return view('productdetail');
    }
}
