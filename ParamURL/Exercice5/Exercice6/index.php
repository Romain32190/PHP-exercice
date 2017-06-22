<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exerice 1 param url</title>
  </head>
  <body>

    <a href="index.php?batiment=12&amp;salle=101">Bonjour !</a>
    <p>Bonjour <?php echo $_GET['batiment'] . ' ' . $_GET['salle'];?> !</p>

  </body>
</html>
