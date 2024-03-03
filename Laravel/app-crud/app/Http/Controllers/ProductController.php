<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products'=>$products]);  //Show index in Products Folder. Location: Laravel/app-crud/resources/views/products/index.blade.php
        
    }
    public function create(){
        return view('products.create'); //Show Create Form in Products Folder. Location: Laravel/app-crud/resources/views/products/create.blade.php
    }
    public function store(Request $request){
        //dd($request->name);    //dd=Data Dump. To check if the data is being sent to the controller
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect (route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }
    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','Product Updated Successfully');
    }
}
