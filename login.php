<?php
session_start();
include("includes/config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$myusername = addslashes($_POST['username']);
	$mypassword = md5(addslashes($_POST['password']));

	$sql = "SELECT userid FROM tbl_users WHERE username = '$myusername' AND password = '$mypassword'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	if($count == 1)
	{
		$_SESSION['login_admin'] = $myusername;
		header("location: http://localhost/gru-webapp/admin/");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Inicie sesión</h2>
        <label for="inputEmail" class="sr-only">Correo institucional</label>
        <input name="username" type="email" id="inputEmail" class="form-control" placeholder="Correo institucional" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuérdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

