<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function addproduct(){
        return view('backend.pages.addproduct');
    }
    public function allproduct(){
        $products = Product::all();
        return view('backend.pages.allproduct',compact('products'));
    }


    public function store(Request $request)
    {
        $product=new Product();
        $product->name = $request->name;
        $product->cetagory = $request->cetagory;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('photo')){
            $filename=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('upload/productphoto'),$filename);
            $product->photo=$filename;
        }

        $product->save();
        return redirect()->route('allproduct');
    }

    public function editproduct($id)
    {
        $product = Product::find($id);
        return view('backend.pages.editproduct', compact('product'));
    }
    
    public function updateproduct(Request $request, $id)
    {
        $product= Product::find($id);
        $product->name = $request->name;
        $product->cetagory = $request->cetagory;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('photo')){
            $filename=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('upload/productphoto'),$filename);
            $product->photo=$filename;
        }

        $product->save();
        return redirect()->route('allproduct');
    }

    public function deleteproduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('success','Product deleted Successfully');
        return redirect()->back();
       }
}
