<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(ProductsController::class)->group(function() {
    Route::get('products/categories', 'showCategories');
    Route::get('products', 'allProducts');
    Route::get('products/{product_id}', 'singleProduct');
    Route::get('products/search/{keywords}', 'searchProduct');

    Route::get('products/category/{category_name}', 'singleCategory');
    Route::post('products/add', 'addProduct');
    Route::put('products/{product_id}', 'updateProduct');
    Route::delete('products/{product_id}', 'deleteProduct');
});
