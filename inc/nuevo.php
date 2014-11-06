<?php 

require('conexion.php');

$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$referencia=$_POST['referencia'];
$precio=$_POST['precio'];

$consulta="INSERT INTO producto(nombre,marca,referencia,precio) VALUES('$nombre','$marca','$referencia','$precio')";
$resultado=$mysqli->query($consulta);

header("Location: ../admin.php");
exit();


 ?>