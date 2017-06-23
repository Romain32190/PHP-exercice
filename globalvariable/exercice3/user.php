<?php
	echo $_COOKIE['login'];
	echo $_COOKIE['password'];
	?>
  <?php
		setcookie("login","Romain");
		echo $_COOKIE["login"];
		setcookie("password","lafargue");
		echo $_COOKIE["password"];
	?>
