<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class HomeController extends Controller
{
    public function autocomplete_ajax(Request $request) 
    {
        $data = $request->all();
        if ($data['query']) {
            // $products = Products::where('status',0)->where('Tendt','LIKE','%'.$data['query'].'%')->get();
            $products = Products::where('status',0)
            ->where('Tendt', 'LIKE', '%'.$data['query'].'%')
            ->get();
            $output = '<ul class="dropdown-menu search_ajax" >';
            foreach ($products as $product) {
                $output .= '<li class="li_search_ajax"><a href="">' . $product->Tendt . '</a></li>';
            }
            $output .= '</ul>';
            return $output;
        }
    }


   
}

