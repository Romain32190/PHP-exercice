<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>

    <form action="index.php" method="POST">
      <select name="genre">
      <option>Mr</option>
      <option>Mme</option>
    </select>

      <p>Votre nom : <input type="text" name="nom" /></p>
      <p>Votre prenom : <input type="text" name="prenom" /></p>
      <p><input type="submit" value="OK"></p>
    </form>

    <?php
    echo $_POST['genre'];
    echo $_POST['nom'];
    echo $_POST['prenom'];

     ?>
  </body>
</html>
