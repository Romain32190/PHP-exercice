<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exerice 1 param url</title>
  </head>
  <body>

    <a href="index.php?Datedebut=2/05/2016&amp;dateFin=27/11/2016">Bonjour !</a>
    <p>Bonjour <?php echo $_GET['Datedebut'] . ' ' . $_GET['dateFin']; ?> !</p>

  </body>
</html>
