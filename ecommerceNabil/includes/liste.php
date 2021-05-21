<?php //creation  d'un tableau produit tableau à 1 entree
require('fonctions/ajoutCat.php');



$category = array(
    1 => "Aliments",
    2 => "Soins",
    3 => "Niches",
    4 => "Paniers",
    5 => "Vetements",
    6 => "Allez dans l'espace"
);
$category = addCategory($category, 'Ma nouvelle categorie');
addCategoryBis("Ma nouvelle categorie utilisant une globale");
