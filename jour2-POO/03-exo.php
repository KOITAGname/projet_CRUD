<?php

class Exo{
    public int $note;
    public string $enonce;
    public array $sujets;
    //les 3 proprietes typees MAIS sans valeurs

    public function __construct(int $note_p, string $enonce_p, array $sujets_p)
    {
        $this->note=$note_p;
        $this->enonce=$enonce_p;
        $this->sujets=$sujets_p;

    }

}
//$e1 est un objet
$e1=new Exo(20,"créer une fonction", ["créer", "exécuter"]) ;
$e2= new Exo(10 , "créer une variable"  , ["lister", "compteur", "afficher"]);

// http://localhost/php-initiation/jour2-POO/03-exo.php

//l'ennonce de l'exercice
// créer le fichier 03-exo.php 
// créer une class Exo qui contient 3 propriétés
// note chiffre entier
// enonce texte
// sujets un tableau

// class dispose d'une fonction constructrice qui initialise ses trois propriétés

// créer un objet $e1 qui aura comme arguments 20 "créer une fonction"  , ["créer", "exécuter"]
// créer un objet $e2 qui aura comme arguments 10 "créer une variable"  , ["lister", "compteur", "afficher"]