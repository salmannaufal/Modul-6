<?php
  session_start();
  if(isset($_SESSION["user"])){
    header("location:beranda.php");
  }
  include ("function.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
	<style type="text/css">
		.login{
			margin: 200px auto;
			padding: 20px;
			width: 240px;
			border: 1px solid pink;
			background-color:yellow;
			border-radius: 30px;
		}
	</style>
  </head>
  <body>
    <?php
      if(isset($_GET["error"])){
        if ($_GET["error"] == "wrong"){
          echo "<h3>Username dan password salah</h3>";
        }
      }
      if(isset($_GET["notif"])){
        if ($_GET["notif"] == "logout"){
          echo "<h3>Berhasil Logout</h3>";
        }
      }
      if(isset($_POST["submit"])){
          echo do_login($_POST['username'], $_POST['password']);
        }
    ?>

    <form class="login" action="beranda.php" method="post">
      Username: <input type="text" name="username"<br>
      Password: <input type="password" name="password"<br>
      <input type="submit" name="submit" value="SIGN IN">
    </form>

  </body>
</html>