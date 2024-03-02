<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');  //Show index in Products Folder. Location: Laravel/app-crud/resources/views/products/index.blade.php
    }
    public function create(){
        return view('products.create'); //Show Create Form in Products Folder. Location: Laravel/app-crud/resources/views/products/create.blade.php
    }
    public function store(Request $request){
        dd($request->name);    //dd=Data Dump. To check if the data is being sent to the controller
    }
}
