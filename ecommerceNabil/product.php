<?php include("fonctions/exofunctions.php"); ?>
<?php include("includes/getProduit.php"); ?>
<?php include('fonctions/tva.php'); ?>
<?php include("includes/liste.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les produits</title>
</head>

<body>
    <?php welcome("Bienvenue sur le site"); ?>
    <hr>
    <?php echo welcomeBis("bienvenue sur le site"); ?>
    <hr>
    <?php include("includes/menu.php"); ?>
    <?php foreach ($products as $product) {

    ?>
        <div>
            <h2><?php echo strtoupper($product["designation"]); ?></h2>
            <p><?php echo $product["description"]; ?></p>
            <p><?php echo prixTTC($product['prixHT'], $product['tva']); ?> €</p>
            <p>Stock : <?php echo $product["stock"]; ?></p>
            <img src="<?php echo $product["image"]; ?>">
        </div>

        <?php
        if ($product["stock"] >= 3) {
        } else {
        ?>
            <span style="color:red;">Produit en rupture</span>
    <?php

        }
    }
    ?>


</body>

</html>