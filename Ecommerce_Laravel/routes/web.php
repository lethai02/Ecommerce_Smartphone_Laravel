<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

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
    return view('front_end.layout_app.home');
});
Route::get('/dienthoai',function(){
    $controller_product = new ProductsController();
    $controller_category = new CategoryController();
    $data_products = $controller_product->getProduct();
    $data_category = $controller_category->getCategory();
    return view('front_end.shop.shopdienthoai',[
        'data_products' => $data_products,
        'data_category' => $data_category
    ]);
});


