<?php
class  Livre{
    private string $auteur;
    private int $jour;
    private int $mois;
    private int $annee;
    private string $titre;
    
    public function __construct(
        string $auteur_p , 
        int $jour_p, 
        int $mois_p, 
        int $annee_p , 
        string $titre
        )
    {

        $this->auteur= $auteur_p;
        $this->jour= $jour_p;
        $this->mois= $jour_p;
        $this->annee= $annee_p;
        $this->titre=$titre;

    } 



        public function getDatefr() :string {
           // return ( $this->jour."/".$this->mois."/".$this->annee);

           $timeStamp = mktime(0,0,0,$this->jour, $this->mois , $this->annee); // timestamp
           // le nombre de secondes entre 1er janvier 1970 et la date concernée
           return date( "d/m/Y" , $timeStamp ); 
           // même que sur SQL strftime() https://sqlite.org/lang_datefunc.html
            
        }


        public function description() : string{
           // auteur a publié le titre le jj/mm/aaaa

           return($this->auteur." a publie le ".$this->titre. " le " .$this->getDatefr());
        }


}

$livre1 = new Livre("Victor Hugo" , 01 , 01 ,1880 ,"Notre Dame de Paris" );

echo($livre1->getDatefr()) ."<br>";
echo($livre1->description())."<br>";

// créer l'objet $livre1 qui aura comme valeur 
/* "Victor Hugo"
1
1
1880
"Notre Dame de Paris" */
// exécuter les deux méthodes datefr et description

// http://localhost/php-initiation/jour2-POO/05-exo.php