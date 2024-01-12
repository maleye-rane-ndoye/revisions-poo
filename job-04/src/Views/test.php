<?php
use App\Models\Product;
use App\Models\Category;

use App\Models\GetProduct;
use App\Models\GetCategory;
ob_start();
?>

      <div>
         
         <?php 

         // Exemple
       
            $category = new Category(1, 'Electronique', 'Catégorie pour les produits électroniques', '2022-01-01 00:00:00', '2022-01-01 12:00:00');
            $product = new Product(1, 'ordinateur', ['./images/testImage.png'], 900, 'Asus 24-56', 20, '2022-01-01 00:00:00', '2022-01-01 12:00:00', $category->getId());
         
         // display informations from getters
         
         echo "ID: " . $product->getId() . "<br>";
         echo "Nom: " . $product->getName() . "<br>";
         echo "Photos: " . implode(', ', $product->getPhotos()) . "<br>";
         echo "Prix: " . $product->getPrice() . "<br>";
         echo "Description: " . $product->getDescription() . "<br>";
         echo "Quantité: " . $product->getQuantity() . "<br>";
         echo "Créé le: " . $product->getCreatedAt()->format('Y-m-d H:i:s') . "<br>";
         echo "Modifié le: " . $product->getUpdatedAt()->format('Y-m-d H:i:s') . "<br>";
         echo "Category_ID: " . $product->getCategory_id() . "<br>";

         echo "Category Name:" . $category->getName() . "<br>";
         echo "Category Description:" . $category->getDescription() . "<br>";
         echo "Category Créé le:" . $category->getCreatedAt()->format('Y-m-d H:i:s') . "<br>";
         echo "Category Modifié le:" . $category->getUpdatedAt()->format('Y-m-d H-i-s') . "<br>";





         // Afficher les produits
         echo "<h2>Produits :</h2>";
         foreach ($products as $product) {
            echo "<pre>";
            print_r($product);
            echo "</pre>";}



         
         // Afficher les catégories
         echo "<h2>Catégories :</h2>";
         foreach ($categorys as $category) {
            echo "<pre>";
            print_r($category);
            echo "</pre>";
         }



         // Afficher les produits
         echo "<h2> le Produit récupérer avec l’id 7:</h2>";
       
         foreach ($productData as $thatproduct) {
            echo "<pre>";
            print_r($thatproduct);
            echo "</pre>";}




         ?>
      </div>

<?php
$content = ob_get_clean();
$title = "this is the job 04";
require_once "template.php";
?>
