<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indextow()
    {
        return view('frontend.pages.indextow');
    }
    

    public function showallproduct(){
        $products = Product::all();
        return view('frontend.pages.showallproduct',compact('products'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }
}
