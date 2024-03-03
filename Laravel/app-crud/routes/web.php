<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index'); ///products is URL, ProductController is Controller, index is function in ProductController, product.index is name of the route
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');    ///products/create is URL, ProductController is Controller, create is function in ProductController, product.create is name of the route
Route::post('/product', [ProductController::class, 'store'])->name('product.store');    ///products is URL, ProductController is Controller, store is function in ProductController, product.store is name of the route
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');