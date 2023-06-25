<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function getCategory(){
        $data = Category::all();
        // return view('front_end.shop.shopdienthoai',[
        //     'data_Category' => $data,
        // ]);
        return $data;
    }
}
