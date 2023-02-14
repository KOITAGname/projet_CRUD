<?php

// http://localhost/php-initiation/jour2/06-exo.php

function  getMyAdresse (){
    $rue = "75 rue de Paris";
    $cp = "75000";
    $ville = "Paris";
    $adresse = "Alain DOE habite au $rue $cp $ville près de la tour Eiffel";
    echo "$adresse";
    var_dump("$adresse");

}
getMyAdresse ();

