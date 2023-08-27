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

Route::get('/',[ProductController::class,"index"])->name("product.index");
Route::get('/products/create',[ProductController::class,"create"])
    ->name("products.create");
Route::post('products/store',[ProductController::class,"store"])->name("products.store");
Route::get('products/{id}/edit',[ProductController::class,"edit"]);
Route::put('products/{id}/update',[ProductController::class,"update"]);
Route::get('products/{id}/delete',[ProductController::class,"destroy"]);
Route::get('products/{id}/show',[ProductController::class,"show"]);
