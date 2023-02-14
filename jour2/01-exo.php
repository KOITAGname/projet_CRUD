<!-- // dans le dossier jour2 créer le fichier 01-exo.php 
afficher dans la page web les chaines de caractères      suivantes 

3 x 6 = 18
3 x 9 = 27 
3 x 12 = 36  -->

<!-- et aussi 

5 x 9 = 45 
5 x 7 = 35
5 x 5 = 25
5 x 3 = 15
=> pour cela vous devez réaliser 2 boucles for (écrit dans le tchat)

// 10h58 => pour faire l'exo --> 

<?php
for ($i = 6; $i <= 12 ;$i= $i + 3){
    $resultat = "3 x $i = " . $i * 3  . "<br>";
    echo   $resultat;
    echo "<br>";

}

for ($i = 9; $i >= 3 ;$i= $i -2){
    $resultat1 = "5 x $i = " . $i * 5  . "<br>";
    echo   $resultat1;

}


//http:localhost/php-initiation/jour2/01-exo.php