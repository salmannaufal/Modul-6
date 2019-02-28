<?php
    session_start();
    include("function.php");
    echo check_login();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>praktik login session</title>
	<style type="text/css">
		h1{
			font-family:algerian;
		}
		body{
			background-color:lightgrey;
		}
	</style>
  </head>
  <body>
	<center>
		<h1>Selamat Datang!</h1>
		<h3><a href="#">Edit Profil</a></h3>
		<h3><a href="#">Logout</a></h3>
	</center>
  </body>
</html>