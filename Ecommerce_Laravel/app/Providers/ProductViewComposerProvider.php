<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

class ProductViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front_end.shop.shopdienthoai', function ($view) {
            $ControllerProduct = app(ProductsController::class)->getProduct();
            $controllerCategory = app(CategoryController::class)->getCategory();
            
            $view->with([
                'data_products' => $ControllerProduct,
                'data_category' => $controllerCategory,
            ]);
        });
    }
    
}
