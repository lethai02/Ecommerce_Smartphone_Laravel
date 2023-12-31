<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;


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

    Route::get('/dienthoai/{category}', [CategoryController::class, 'getProductsbyCategory'])
    ->name('front_end.shop.shopdienthoai');
Route::get('/dienthoai', [CategoryController::class, 'getProductsbyCategory'])->name('front_end.shop.shopdienthoai');

Route::post('/autocomplete-ajax', [HomeController::class, 'autocomplete_ajax'])->name('search.jax');
Route::post('/test',  [HomeController::class, 'test'])->name('test_ajax');
