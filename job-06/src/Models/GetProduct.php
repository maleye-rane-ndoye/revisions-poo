<?php

namespace App\Models;
use PDO;
use App\Models\GetCategory;
class GetProduct extends DatabaseLog
{
    public function getAllProducts()
    {
        $pdo = $this->getBdd();

        
        $query = $pdo->prepare("SELECT * FROM product");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }


   public function getTheProduct()
    {
        $pdo = $this->getBdd();
        
        $productId = 7;

        
            $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
            $query->bindParam(':id', $productId, PDO::PARAM_INT);
            $query->execute();

            $productData = $query->fetch(PDO::FETCH_ASSOC);


            if ($productData['id'] === $productId) {
            
                
                return $productData;
            } else {
                echo "Aucun produit trouvé avec l'id $productId.";
            }

    }


   public function getProductsFromCategory()
    {
        $pdo = $this->getBdd();

        $categoryId = 4;

        $query = $pdo->prepare("SELECT * FROM product WHERE category_id = :category_id");
        $query->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $query->execute();

        $productsOfCategoryData = $query->fetchAll(PDO::FETCH_ASSOC);

        return $productsOfCategoryData;
    }


  


}
