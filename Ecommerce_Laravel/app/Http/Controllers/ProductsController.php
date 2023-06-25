<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function getProduct(){
        $data = Products::all();
        // return view('front_end.shop.shopdienthoai',[
        //     'data_products' => $data,
        // ]);
        return $data;
    }
}
