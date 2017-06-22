<?php
  function personne($nom, $prenom, $age){
    return "Bonjour " . $nom . ' ' . $prenom . ',tu as ' . $age . ' ans.';
  }
  echo personne(lafargue,romain,20);
?>
