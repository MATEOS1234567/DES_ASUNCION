<?php
require('conexion.php');
$id=$_GET['id'];
$query="SELECT nombre,direccion,correo,telefono1,telefono2 FROM cliente WHERE id=$id"  ;
$resultado=$mysqli->query($query); 
$row=$resultado->fetch_assoc();



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/jquery-ui.css" rel="stylesheet">  
</head>
<body>

  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">modificar de cliente</h1>
          </div>
          <div class="modal-body">
            <form class="from" action="gcliente.php" method="POST"  nombre="modificar.cliente">
              <input class="hidden" name="id" type="text" value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $row['nombre'];?>">
              <input type="text" name="direccion" value="<?php echo $row['direccion'];?>">
              <input type="text" name="correo" value="<?php echo $row['correo'];?>">
              <input type="text" name="telefono1" value="<?php echo $row['telefono1'];?>">
              <input type="text" name="telefono2" value="<?php echo $row['telefono2'];?>">
              <button type="submmit">enviar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" >Cerrar ventana</button>
          </div>
        </div>
  </div>

  
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-ui.js"></script>  

</body>
</html>

