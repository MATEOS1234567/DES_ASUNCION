<?php

require('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$referencia=$_POST['referencia'];
$precio=$_POST['precio'];

$consulta="UPDATE producto Set nombre='$nombre',marca='$marca',referencia='$referencia',precio='$precio' WHERE id='$id' ";
$resultado=$mysqli->query($consulta); 

header("Location: ../admin.php");
exit();

?>