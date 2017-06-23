<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form  action="user.php" method="POST">
      <label for="login"></label>
      <input type="text" name="login"></input>
      <label for="password"></label>
      <input type="password" name="password"></input>
      <button type="submit">Connectez vous</button>


    </form>

    <?php
		if($_POST['login']){
		    setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);!
		    header("Location: index.php");
		}if($_POST['pass']){
		    setcookie('pass', $_POST['password'], time() + 365*24*3600, null, null, false, true);!
		    header("Location: index.php");
		}
	?>



  </body>
</html>
