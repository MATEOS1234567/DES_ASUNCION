<?php
	require ('conexion.php');

	$id=$_GET['id'];

	$consulta="DELETE FROM cliente WHERE id='$id'";
	$resultado=$mysqli->query($consulta);


	header("location: ../cliente.php");
	exit();







?>