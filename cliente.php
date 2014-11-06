<?php 
  
  session_start();

  echo "usuario conextado:"."".$_SESSION['usuario'];
  echo "</br>";
  echo "Y la contraseña:"."".$_SESSION['password'];

  
  require('inc/conexion.php');
  $consulta= "SELECT * FROM cliente";
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
    <h1>LISTA DE CLIENTE </h1>
    <h3><a data-toggle="modal" href="#frmingresar">AGREGAR NUEVO CLIENTE</a></h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Correo</th>
          <th>Telefono1</th>
          <th>Telefono2</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $fila['id']; ?></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['direccion']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          <td><?php echo $fila['telefono1']; ?></td>
          <td><?php echo $fila['telefono2']; ?></td>
          <td><a href="inc/modcliente.php?id=<?php echo $fila['id']; ?>">Modificar</a> | <a href="inc/elicliente.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
        </tr>

      <?php } ?>  
      </tbody>
    </table>
    <div class="modal fase"id="frmingresar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" >INGRESAR NUEVO CLIENTE</h4>
          </div>
          <div class="modal-body">
            <form action="inc/nuvcliente.php" method="POST" name="nuevocliente">
            <input type="text" name="nombre" placeholder="ingrese el nombre"/>
            <input type="text" name="direccion" placeholder="ingrese  la direccion"/>
            <input type="text" name="correo" placeholder="ingrese el correo"/>
            <input type="text" name="telefono1" placeholder="ingrese el numero"/>
            <input type="text" name="telefono2" placeholder="ingrese el numero"/>
            <button type="submit">Guardar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>   
    
  </body>
</html>