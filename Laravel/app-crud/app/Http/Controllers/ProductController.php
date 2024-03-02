<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');  //Show index in Products Folder. Location: Laravel/app-crud/resources/views/products/index.blade.php
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
}
