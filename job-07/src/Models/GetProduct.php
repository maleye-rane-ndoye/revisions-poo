<?php

namespace App\Models;
use PDO;
use App\Models\GetCategory;
class GetProduct extends DatabaseLog 
{
    private $id;
    private $name;
    private $photos;
    private $price;
    private $description;
    private $quantity;
    private $createdAt;
    private $updatedAt;
    private $category_id;



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


    public function hydrate(array $data)
    {
        // Assumez que les clés dans le tableau $data correspondent aux propriétés de la classe Product
        foreach ($data as $key => $value) {
            // Utilisez la méthode magique __set pour définir la valeur de la propriété
            $this->{$key} = $value;
        }
    }





  public function findOneById(int $id)
    {
        $pdo = $this->getBdd();

        $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $productData = $query->fetch(PDO::FETCH_ASSOC);

        if ($productData) {
            // Si des données ont été trouvées, créer une instance de la classe Product et l'hydrater
            $findproduct = new GetProduct();
            $findproduct->hydrate($productData);

            return $findproduct;
        } else {
            return false; // Aucun produit trouvé avec l'id spécifié
        }
    }



}
