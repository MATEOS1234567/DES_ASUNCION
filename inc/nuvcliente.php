<?php 

require('conexion.php');

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];

$consulta="INSERT INTO cliente(nombre,direccion,correo,telefono1,telefono2) VALUES('$nombre','$direccion','$correo','$telefono1','$telefono2')";
$resultado=$mysqli->query($consulta);

header("Location: ../cliente.php");
exit();


 ?>