<?php

// http://localhost/php-initiation/jour2/04-exo.php

$ville = "Marseille";

if($ville =="paris")
{
    echo "vous habitez à Paris";

}
elseif($ville =="Boulogne" || $ville == "Clamart" || $ville == " Montrouge "){
    echo "vous habitez dans le 92";
}
elseif($ville =="Saint-Denis" || $ville == "Aubervilliers " || $ville == "Pantin")
{
    echo "vous habitez dans le 93";
}
else{
    echo "vous habitez hors d'Ile de France";
}
