<?php
use App\Models\Product;
ob_start();
?>

      <div>
         Maleye you did it again <br>
         <?php 

         // Exemple
         $product = new Product(1, 'ordinateur', ['./images/testImage.png'], 900, 'Asus 24-56', 20, '2022-01-01 00:00:00', '2022-01-01 12:00:00');
         
         // display informations from getters
         
         echo "ID: " . $product->getId() . "<br>";
         echo "Nom: " . $product->getName() . "<br>";
         echo "Photos: " . implode(', ', $product->getPhotos()) . "<br>";
         echo "Prix: " . $product->getPrice() . "<br>";
         echo "Description: " . $product->getDescription() . "<br>";
         echo "Quantité: " . $product->getQuantity() . "<br>";
         echo "Créé le: " . $product->getCreatedAt()->format('Y-m-d H:i:s') . "<br>";
         echo "Modifié le: " . $product->getUpdatedAt()->format('Y-m-d H:i:s') . "<br>";
         ?>
      </div>

<?php
$content = ob_get_clean();
$title = "this is the job 01";
require_once "template.php";
?>
