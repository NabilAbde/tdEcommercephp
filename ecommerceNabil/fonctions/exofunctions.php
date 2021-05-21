<?php
/* creer une fonction qui affiche "Bienvenue sur le site"
function welcome()
{
    echo "Bienvenue sur le site"
}
/*function welcomeBis()  
{
    $msg = "Bienvenue sur le site Bis";
    return $msg;
}*/

function welcome($msg) //idem avec une variable
{
    echo strtoupper($msg);
}
function welcomeBis($msg)
{
    return $msg;
}
// mette le message en maj
