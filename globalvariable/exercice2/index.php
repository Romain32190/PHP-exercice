<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

	<a href="recuperation.php">Hello PHP</a>

	<?php
		session_start();
		$_SESSION['name'] = 'Lafargue';
		$_SESSION['firstname'] = 'Romain';
		$_SESSION['age'] = '20';
	?>

  </body>
</html>
