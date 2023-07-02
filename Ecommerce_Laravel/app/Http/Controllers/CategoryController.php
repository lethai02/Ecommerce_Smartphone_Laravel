<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Livewire\Withpagination;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class CategoryController extends Controller
{


    public function getProductsbyCategory( Request$request,$category = null)
    {
       
        $data_category = Category::all();
        $data_products = Products::query();
        $sortingOrder = $request->input('sorting', '');
        //timkiem
        if ($category) {
            $data_products->join('thuonghieu', 'products.id_thuonghieu', '=', 'thuonghieu.id_thuonghieu')
                ->where('thuonghieu.Tenthuonghieu', $category);
        }
     // chat GPT
     if ($request->has('start_price') && $request->has('end_price')) {
        $start_price = $request->input('start_price');
        $end_price = $request->input('end_price');
    $data_products->whereBetween('products.Gia', [$start_price, $end_price]);
    }
    // Sort the products based on the selected order
    if ($sortingOrder === 'asc') {
        $data_products->orderBy('Gia', 'asc');
    } else if ($sortingOrder === 'desc') {
        $data_products->orderBy('Gia', 'desc');
    }
    // elseif(isset($_GET['start_price']) && isset($_GET['end_price'])) {
    //     $min_price = $_GET['start_price'];
    //     $max_price = $_GET['end_price'];
    //     $data_products->whereBetween('products.Gia', [$min_price, $max_price]);
    // }
    // elseif(isset($_GET['start_price']) && isset($_GET['end_price']) ) {
    //     $min_price = $_GET['start_price'];
    //     $max_price = $_GET['end_price'];
    //     $data_products->whereBetween('products.Gia', [$min_price, $max_price])->orderByDesc('products.Gia');

    // }
    // elseif(isset($_GET['start_price']) && isset($_GET['end_price']) && isset($_GET['sorting' === 'asc'])) {
    //     $min_price = $_GET['start_price'];
    //     $max_price = $_GET['end_price'];
    //     $data_products->whereBetween('products.Gia', [$min_price, $max_price])->orderBy('products.Gia');

    // }

   
    $category_name = ($category != '') ? null : ''; // Khởi


        // $data_products = $data_products->get();
        $data_products = $data_products->paginate(10); // Paginate the products, 10 items per page

        foreach ($data_products as $data){
            $category_name = $data->Tenthuonghieu;
            $product_name = $data->Tendt;
        }
        return view('front_end.shop.shopdienthoai',[
            'data_category' => $data_category,
            'data_products'=>$data_products,
            'category_name'=>$category_name,
            'sorting'=>$sortingOrder,
            //chatgpt
            'start_price' => $request->input('start_price'),
            'end_price' => $request->input('end_price'),
            'product_name' => $product_name,
        ]);
    }
  
    
    
}
