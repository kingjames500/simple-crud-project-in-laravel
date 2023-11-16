<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('products/store', [ProductController::class,'store'])->name('products.store');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('products/{product}/update', [ProductController::class, 'update'])->name('products.update');

Route::delete('products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');

Route::get('products/show', [ProductController::class, 'show'])->name('products.show');

