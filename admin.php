<?php 
  
  session_start();

  echo "usuario conextado:"."".$_SESSION['usuario'];
  echo "</br>";
  echo "Y la contraseña:"."".$_SESSION['password'];

  
  require('inc/conexion.php');
  $consulta= "SELECT * FROM producto";
  $resultado=$mysqli->query($consulta); 
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">	
  </head>
    <body>
    <h1>LISTA DE CLIENTES</h1>
    <h3><a data-toggle="modal" href="#frmingresar">AGREGAR NUEVO PRODUCTO</a></h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>marca</th>
          <th>referencia</th>
          <th>precio</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $fila['id']; ?></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['marca']; ?></td>
          <td><?php echo $fila['referencia']; ?></td>
          <td><?php echo $fila['precio']; ?></td>
          <td><a href="inc/modificar.php?id=<?php echo $fila['id']; ?>">Modificar</a> | <a href="inc/eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
        </tr>

      <?php } ?>  
      </tbody>
    </table>
    <div class="modal fase"id="frmingresar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" >Igresar registro de productos</h4>
          </div>
          <div class="modal-body">
            <form action="inc/nuevo.php" method="POST" name="nuevousuario">
            <input type="text" name="nombre" placeholder="ingrese el nombre"/>
            <input type="text" name="marca" placeholder="ingrese  la marca"/>
            <input type="text" name="referencia" placeholder="ingrese la referencia"/>
            <input type="text" name="precio" placeholder="ingrese el precio"/>
            <button type="submit">Guardar registro</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal">Cerrar ventana</button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script> 	
    
  </body>
</html>