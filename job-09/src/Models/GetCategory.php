<?php

namespace App\Models;
use PDO;
use App\Models\GetProdct;

class GetCategory extends DatabaseLog
{
    public function getAllCategorys()
    {
        $pdo = $this->getBdd();

    

        $query = $pdo->prepare("SELECT * FROM category");
        $query->execute();
        $categorys = $query->fetchAll(PDO::FETCH_ASSOC);

        return $categorys;
    }



    public function gettheCategory()
    {
        $pdo = $this->getBdd();


        //je recupere une categorie depuis l'identité d'un produit donné
        // je recupére la methode qui recupere les produits
        $getProduct = new GetProduct();
        //j'appele la function de cette methode qui recupere un produit
        $productData = $getProduct->getTheProduct();
        //ici je recupere depuis les informations de ce produit son attribut qui defini la categorie au quel il appartien

        $categoryId =  $productData['category_id'];


        
        $query = $pdo->prepare("SELECT * FROM category WHERE id = :category_id");
        $query->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $query->execute();

        $categoryData = $query->fetch(PDO::FETCH_ASSOC);
       
        if ( $categoryData['id'] === $categoryId) {
        
            
            return $categoryData;
        } else {
            echo "Aucun produit trouvé avec l'id $categoryId.";
        }

   }
    


}
