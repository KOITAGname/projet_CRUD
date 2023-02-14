<?php 
declare(strict_types=1);
// http://localhost/php-initiation/jour2/09-fonction-suite.php


function calcul(int $a, int $b){
    echo "<p>" . $a * $b ."</p>";
}

calcul( 12, 13 );
// calcul( "12px", 13 ); Fatal error: Uncaught TypeError: calcul(): Argument #1 ($a) must be of type int, string given
// calcul( "12", 13 ); ; Fatal error: Uncaught TypeError: calcul(): Argument #1 ($a) must be of type int, string given

// en + du type hinting => ajouter la ligne declare(strict_types=1)
// faire en sorte que PHP respect à la lettre le typage sans ses exceptions 
// bonne chose de l'utiliser car rend le code + prévisible 

// return 

function information(int $a , bool $b , string $c):string {
    if($a > 10){
        return $c ;
    }elseif($b){
        return "le paramètre b est true";
    }else {
        return "cas par défaut";
    }
}
// return de récupérer une valeur stockée dans la fonction
// ET il possible d'explicitement déclarer le type de la valeur retournée

$total = ltrim(information(1, false, "element1"));

// essayer de réduire le nombre d'erreurs / coquille au moment de l'exécution du code 
// comme une petite documentation 