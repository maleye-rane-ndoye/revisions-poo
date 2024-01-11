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
}
