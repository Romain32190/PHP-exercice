<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exerice 1 param url</title>
  </head>
  <body>

    <a href="index.php?semaine=12&amp;serveur=LAMP">Bonjour !</a>
    <p>Bonjour <?php echo $_GET['semaine'] ?> !</p>

  </body>
</html>
