<?php

$tableau = array(

"Pas de calais" => "62",
"Nord" => "59",
"Somme" => "80",
"Aisne" => "02",
"Oise" => "60",
"Reims" => "51",

);

foreach($tableau as $cle=>$valeur){
   echo "Le département ", $cle. "à le numéro ",  $valeur.'<br>';

 }

?>
