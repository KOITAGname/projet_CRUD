<?php
class Immeuble{
public string  $adresse = "102 rue de Lille "; 
public array $habitants = [ "Alain","Céline" ,"Pierre" , "Zorro"];
public bool $etatAscenseur = false ;

public function infoMaintenance() :string{
    if( $this->etatAscenseur == false) {
        return "l'ascenseur est en panne" ;
    } 
    else{
        return "l'ascenseur est en fonctionnel";
    }
}
public function description() : string{
    return ($this->habitants[0] ." ". $this->habitants[3] . " et " .$this->habitants[1]. " habitent au "  .$this->adresse) ;
}
}
$immeuble=new Immeuble;
echo($immeuble->infoMaintenance()) ."<br>";
echo($immeuble->description());
// créer la class et exécuter les méthodes infoMaintenance et description

// http://localhost/php-initiation/jour2-POO/01-exo.php

//   l'ennonce de l'exo1
//créer dans le dossier jour7 le fichier 01-exo.php 
//créer une class Immeuble 
// contient 3 propriétés 
// adresse 102 rue de Lille 
// habitants tableau avec Alain / Céline / Pierre et Zorro
// etatAscenseur  false 
// deux méthodes 
// infoMaintenance retourne du texte et 
//si etatAscenseur  est false => "l'ascenseur est en panne"
//si etatAscenseur  est true => "l'ascenseur est en fonctionnel"
// description retourne du texte et
// Alain Zorro et Céline habitent au 102 rue de Lille 

// créer la class et exécuter les méthodes infoMaintenance et description
