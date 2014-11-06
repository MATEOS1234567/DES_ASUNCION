<?php

require('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];

$consulta="UPDATE cliente Set nombre='$nombre',direccion='$direccion',correo='$correo',telefono1='$telefono1',telefono2='$telefono2' WHERE id='$id' ";
$resultado=$mysqli->query($consulta); 

header("Location: ../cliente.php");
exit();

?>