<?php

// http://localhost/php-initiation/jour2/10-exo.php


// créer le fichier 10-exo.php 
// créer une fonction qui s'appelle aireCercle 
// dispose de 2 paramètres rayon chiffre à virgule et unite chaine de caractère
// contient les instructions suivantes 
// créer une phrase "un cercle de rayon rayon a une aire de " Pi * rayon puissance 2 + unite ²
// retourner la variable phrase (de type string)

// exécuter cette fonction avec les paramètres suivants 
// 30  ,cm
// 12.4 , km  


  function aireCercle ( float $rayon , string $unite) {
    $resultat = 3.14 * $rayon **2  ."$unite <sup>2</sup>";
    $resultat1 = "un cercle de rayon   $rayon ".
    "a une aire de " . $resultat;
   return $resultat1;
  };
echo(aireCercle(30  ,"cm"));
echo(aireCercle(12.4  ,"km"));
