<?php
// http://localhost/php-initiation/jour2-POO/constructeur.php

class A{
    //on peut creer des proprietes et des methodes 
    //en php certain  nom de methodes
    public function __construct()
    //methode magique=> respecter le nom de la methode 
    //__construct() => bien respecter le __ etle miniscules 
    // cette methode a un sens particulierpour php
    //cette methode s'executer AUTOMATIQUEMENT lorsque qu'on creer un objet
    {
        
    }
}
$a=new A();//+ la creation de l'objet $a et __construct()
//si la classe contient la methode __construct() il est AUTOMATIQUEMENT executer
//il n'ya que cette methode qui s'execute AUTOMATIQUEMENT 

class B{
    public string $nom ; // SANS le = SANS valeur
    public int $largeur ; // SANS le = 

    function __construct( string $nom_p , int $largeur_p ){ 
        // la fonction constructrice de la class
        // permettre de définir la class 
        // le role du constructure :
        // remplir de paramètre et d'instruction qui vont initialiser des propriétés 
        $this->nom = $nom_p ; // "bonjour"
        // $this->nom = "bonjour" ;
        $this->largeur = $largeur_p ; // 42 
    }
}

$b = new B("bonjour" , 42);
// donc 
