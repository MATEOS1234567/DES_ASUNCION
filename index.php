<?php
  session_start(); 
  $_SESSION['usuario']="mateo";
  $_SESSION['password']="1234";

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>acceso</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">	
  </head>
    <body>
      <div class="jumbotron caja">
        <div class="conteiner">
          <form action="inc/login.php" method="POST" role="from">
            <legend>ACCESO AL SISTEMA</legend>
              <label>nombre de usuario</label>
              <input class="form-control" type="text" name="usuario" placeholder="escriba nombre ">
              <label>contraseña</label>
              <input class="form-control" type="text" name="password" placeholder="escriba password ">
              <button type="submit" class="btn btn-lg btn-primary">ingresar</button>
              
          </form>
        </div>
      </div>



      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery-ui.js"></script>   

    </body>

</html>