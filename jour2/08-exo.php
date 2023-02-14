<?php

// http://localhost/php-initiation/jour2/08-exo.php

// créer le fichier 08-exo.php 
// créer une fonction note 
// prendre 5 paramètres $a ,$b $c $d et $e
// les 5 paramètres doivent être de type chiffre entier
// la fonction permet de trouver la moyenne de 5 notes saisies

// exécuter la fonction avec les valeurs suivantes 
// 0 10 20 5 15
// 12 14 15 6 8

function note(int $a ,int $b, int $c, int $d, int $e){

    $somme_notes = $a + $b + $c + $d +$e;

    $moyenne = $somme_notes /5 ;
    // echo "$moyenne" ;
    var_dump($moyenne);
}

note(0,10 ,20, 5 ,15);
note(12,14,15,6,8);