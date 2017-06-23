<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>

    <form action="user.php" method="POST" enctype="multipart/form-data">
      <p>Votre nom : <input type="text" name="nom" /></p>
      <p>Votre prenom : <input type="text" name="prenom" /></p>
      <input type="file" name="pdf">
      <button type="submit">OK</button>
    </form>
    

  </body>
</html>
