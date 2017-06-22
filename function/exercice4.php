<?php
  function nombres($nom1, $nom2){
    if ($nom1 === $nom2){
      echo 'Les deux nombres sont identiques';
    }
    elseif ($nom1 < $nom2){
      echo 'Le premier nombre est plus grand';
    }
    else {
      echo 'Le second nombre est plus grand';
    }
  }
  nombres(20, 5);
?>
