<?php

function prixPanier($prixHt, $taux = 20, $quantite)
{


    $prixTTC = ($prixHt * (($taux / 100) + 1)) * $quantite;
    $prixTTC = round($prixTTC, 2);

    return $prixTTC;
}
