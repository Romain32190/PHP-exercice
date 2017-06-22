<?php

function personne($genre, $age){
  if ($genre === homme && $age < 18){
    echo 'Vous êtes un homme et vous êtes mineur';
  }
  elseif($genre === homme && $age >= 18){
    echo 'Vous êtes un homme et vous êtes majeur';
  }
  elseif($genre === femme && $age < 18){
    echo 'Vous êtes une femme et vous êtes mineur';
  }
  else{
    echo 'Vous êtes une femme et vous êtes majeur';
  }
}

echo personne(homme, 25);


 ?>
