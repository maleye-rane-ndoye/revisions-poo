<?php

namespace App\Models;
use PDO;
class GetProduct extends DatabaseLog
{
    public function getAllProducts()
    {
        $pdo = $this->getBdd();

        // la requete de recuperation de mes produits
        $query = $pdo->prepare("SELECT * FROM product");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }


   public function getTheProduct()
   {
      $pdo = $this->getBdd();
       
       $productId = 7;

       // Préparer et exécuter la requête
        $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam(':id', $productId, PDO::PARAM_INT);
        $query->execute();

        // Récupérer les données sous forme de tableau associatif
        $productData = $query->fetch(PDO::FETCH_ASSOC);


        if ($productData['id'] === $productId) {
        
            // Afficher les informations du produit hydraté
            return $productData;
        } else {
            echo "Aucun produit trouvé avec l'id $productId.";
        }

   }
}
