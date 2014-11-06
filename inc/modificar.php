<?php
require('conexion.php');
$id=$_GET['id'];
$query="SELECT nombre,marca,referencia,precio FROM producto WHERE id=$id"  ;
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
            <h1 class="modal-title">modificar de producto</h1>
          </div>
          <div class="modal-body">
            <form class="from" action="gmod.php" method="POST"  nombre="modificar.usuario">
              <input class="hidden" name="id" type="text" value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $row['nombre'];?>">
              <input type="text" name="marca" value="<?php echo $row['marca'];?>">
              <input type="text" name="referencia" value="<?php echo $row['referencia'];?>">
              <input type="text" name="precio" value="<?php echo $row['precio'];?>">
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

