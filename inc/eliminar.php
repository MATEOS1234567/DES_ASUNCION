<?php
	require ('conexion.php');

	$id=$_GET['id'];

	$consulta="DELETE FROM producto WHERE id='$id'";
	$resultado=$mysqli->query($consulta);


	header("location: ../admin.php");
	exit();







?>
