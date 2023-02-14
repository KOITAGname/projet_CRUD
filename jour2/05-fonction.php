<?php

// http://localhost/php-initiation/jour2/05-fonction.php


// les fonctions permettent de stocker des instructions 

// pour créer une fonction => utiliser le mot clé function

function a (){
    // dans la variable a on va pouvoir stocker des instructions
    $largeur = 10 ;
    $hauteur = 30 ;
    $aireRectangle = "l'aire d'un rectangle de largeur $largeur et de hauteur $hauteur est égal à " . $largeur * $hauteur;
    echo "<p>$aireRectangle</p>" ;
    // la fonction a contient 4 instructions 
}

// créer une fonction == stocker dans la RAM 

// exécuter les instructions stokées dans la fonction 
a();

// créer le fichier 06-exo.php
// créer une fonction 
// getMyAdresse
// elle ne prend pas de paramètre
// elle contient les instructions suivantes 

// rue = 75 rue de Paris
// cp 75000
// ville = "Paris"
// afficher dans le navigateur le phrase suivante
// Alain DOE habite au 75 rue de Paris 75000 Paris près de la tour Eiffel

// exécuter la fonction