<?php

namespace App\Models;
use PDO;

class GetCategory extends DatabaseLog
{
    public function getAllCategorys()
    {
        $pdo = $this->getBdd();

        // la requete de recuperation de tous mes categorys

        $query = $pdo->prepare("SELECT * FROM category");
        $query->execute();
        $categorys = $query->fetchAll(PDO::FETCH_ASSOC);

        return $categorys;
    }
}
