<?php 
	session_start();

	//conexion
	require('conexion.php');



	//asignar variables
	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];

	//sentencia
	$consulta="SELECT user,pass FROM usuario";
	$resultado=$mysqli->query($consulta);



	//condicion
	while ($fila=$resultado->fetch_assoc()) {
		//capturar los campos de usuario de la bd
		$u=$fila['user'];
		$c=$fila['pass'];
		if($usuario==$u & $pass==$c){
			//el usuario del formulario es igual al de la bd 
			//asigna las variables de SESSION 
			$_SESSION['usuario']==$usuario;
			$_SESSION['password']=$pass;

			header("Location: ../menu.php");
			exit();

		}
		else{
			echo "datos erroneos";

		}
		
	}

 ?>