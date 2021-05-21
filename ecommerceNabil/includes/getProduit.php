<?php
require('fonctions/ajoutProduit.php');
$products = array(
   array("designation" => "Coussin confort", "prixHT" => 29, "description" => "Coussin rond apaisant et destressant d'un diametre de 50 cm, non toxique, anti acarien", "tva" => "0.2", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxox5LyWNEwzxwcX4M6JsQk0O8rjy229Xp38s9vuOexFqxoG49VhwgsjKnzAY&usqp=CAc", "stock" => "0"),

   array("designation" => "Croquette nutrition", "prixHT" => 39, "description" => "Croquettes hautes performances", "tva" => "0.2", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThjPGSToedTmSt5ZV_i2yj7qITxsy7vpdYIUSjCHGpAMvMJ_Kf3rZzq6v56nhhrQOXb2xgsV8&usqp=CAc", "stock" => "10"),

   array("designation" => "Niche en bois", "prixHT" => 129, "description" => "Véritable niche en bois massif spacieuse et facile à monter", "tva" => "0.2", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz13K_KC8EcLrTIuwR8wPRsIb6CXJBgZsxgL3qvHFv-eMtH5uI-WacF0Pifug&usqp=CAc", "stock" => "100"),
);

//foreach ($products as $tabProducts) { 
//echo $product['designation'];

/*foreach ($products as $tabProducts) { 
     foreach ($tabProducts as $product){
        echo $product;
     }*/
$products = addProduct($products, array("designation" => "Pull chien pirate", "prixHT" => 39, "description" => "Pull haute couture symbole pirate", "tva" => "0.2", "image" => "https://i.pinimg.com/474x/8b/04/ed/8b04ed5d24a793487f919e457d841a68.jpg", "stock" => "0"));
