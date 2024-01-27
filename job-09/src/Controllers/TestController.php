<?php

namespace App\Controllers;

use App\Models\GetProduct;
use App\Models\GetCategory;
use App\Models\Product;
class TestController
{
    public function showtestPage()
    {
        
        $getProduct = new GetProduct();
        $getCategory = new GetCategory();
        
        $allProducts = $getProduct->getAllProducts();
        $categorys = $getCategory->getAllCategorys();

        $productData = $getProduct->getTheProduct();
          
        $categoryData = $getCategory->gettheCategory();

        $productOfCategoryData = $getProduct->getProductsFromCategory();

        $findproduct = $getProduct->findOneById(14);
        
        $products = $getProduct->findAll();


        require __DIR__ . '/../Views/test.php';
    }
}
