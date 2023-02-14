// créer un nouveau fichier php contenant une variable $age
// initialiser la variable $age = 30
// si l'age est compris entre 0 et 10
// alors afficher dans le navigateur vous êtes un enfant
// si l'age est compris entre 10 inclu et 18
// alors afficher dans le navigateur vous êtes un ado
// si l'age est supérieur ou égal à 18 et inférieur ou égal à 120
//  alors afficher dans le navigateur vous êtes un adulte
// sinon
// afficher dans le navigateur l'âge mentionné n'est pas conforme

<?php
// http://localhost/php-initiation/jour2/03-exo.php

$age = 30 ;

if($age >= 0 && $age < 10){
    echo "vous êtes un enfant";
} elseif($age >= 10 && $age < 18){
    echo "vous êtes un ado";
} elseif($age >= 18 && $age <= 120){
    echo  "vous êtes un adulte"; // le texte affiché
} else {
    echo "l'age mentionné n'est pas conforme";
}

// texte chiffre à écrire  dans le navigateur 
// echo 
// debugger une variable => valeur / type / où dans le script xdebug
// var_dump()

// boolean 
// echo true => 1
// echo false => rien
var_dump(true); // bool(true)
var_dump(false); // bool(false) / http://localhost/php-initiation/jour2/03-exo.php

$age = 30 ;

if($age >= 0 && $age < 10){
    echo "vous êtes un enfant";
} elseif($age >= 10 && $age < 18){
    echo "vous êtes un ado";
} elseif($age >= 18 && $age <= 120){
    echo  "vous êtes un adulte"; // le texte affiché
} else {
    echo "l'age mentionné n'est pas conforme";
}

// texte chiffre à écrire  dans le navigateur 
// echo 
// debugger une variable => valeur / type / où dans le script xdebug
// var_dump()

// boolean 
// echo true => 1
// echo false => rien
var_dump(true); // bool(true)
var_dump(false); // bool(false) 

// && condition à gauche et à droite soient SIMULTANEMENT true
// || une condition soit à gauche soit à droite soit les deux  true

// ---------------

// créer le fichier 04-exo.php

// créer un nouveau fichier php contenant une variable $ville
// initialiser la variable $ville = "Marseille"

// si $ville a pour valeur Paris 
// alors afficher dans le navigateur vous habitez à Paris

// si $ville a pour valeur Boulogne ou Clamart ou Montrouge 
// alors afficher dans le navigateur vous habitez dans le 92

// si $ville a pour valeur Saint-Denis ou Aubervilliers ou Pantin
//  alors afficher dans le navigateur vous habitez dans le 93

// sinon
// afficher dans le navigateur vous habitez hors d'Ile de France