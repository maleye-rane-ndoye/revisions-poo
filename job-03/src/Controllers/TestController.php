<?php

namespace App\Controllers;

use App\Models\GetProduct;
use App\Models\GetCategory;

class TestController
{
    public function showtestPage()
    {
        
        $getProduct = new GetProduct();
        $getCategory = new GetCategory();

        
        $products = $getProduct->getAllProducts();
        $categorys = $getCategory->getAllCategorys();

        
        require __DIR__ . '/../Views/test.php';
    }
}
