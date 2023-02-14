<?php

// http://localhost/php-initiation/jour2/07-fonction-suite.php


function calcul(){
    $a = 2 ;
    $b = 3 ;
    echo "<p>" . $a + $b ."</p>" ;
}

calcul();

// attention en PHP il n'est pas possible de créer deux fois la fonction dans un fichier / projet
// Fatal error: Cannot redeclare calcul() 
function calcul2(){ 
    $a = 10 ;
    $b = 5 ;
    echo "<p>" . $a + $b ."</p>" ;
}
calcul2() ;

// pour pouvoir rendre les valeurs à calculer dynanimque => ajouter des paramètres à la fonction 

function calcul3($a, $b){
    echo "<p>" . $a + $b ."</p>" ;
}
// définir la valeur de $a et $b au moment de l'appel de la fonction

calcul3(12, 15) ; // $a = 12 et $b = 15
calcul3(33, -20) ; // $a = 33 et $b = -20