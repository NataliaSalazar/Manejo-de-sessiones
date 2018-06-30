<?php

//sesion de login
	if(isset($_POST['btn-register'])){

		$genero = $_POST['genero'];
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$conf_pass = $_POST['conf_pass'];

		//Validar el genero
		if ($genero == 'genero') {
			//error 3 = 'Debe seleccionar un genero!'
			header('Location: http://localhost/WebM/index.php?error=3');
		}

		if($conf_pass == $password){

			include ('../../../views/front/login.php');
		}
		else{
			//error 1 = 'Las contraseñas no coinciden!'
			header('Location: http://localhost/WebM/index.php?error=1');
		}
	}
	else{
			header('Location: http://localhost/WebM/index.php');
	}
?>