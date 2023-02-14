<?php

// http://localhost/php-initiation/jour2/02-condition.php

// les structures conditionnelles sont très proches que javascript en PHP 
// quasi identique

$largeur = 30 ;

if($largeur < 10){
    var_dump("modèle XS");
} elseif($largeur < 40){ // la différence : il n'y a pas d'espace entre else et if en PHP
    var_dump("Modèle large L") ; // cette ligne est exécuté et les suivantes sont ignorées
} elseif($largeur < 80){
    var_dump("Modèle XXL") ;
} else {
    var_dump("la valeur est invalide");
}