<?php

//sesion de login

if(isset($_POST['btn-register'])){

	$genero  = $_POST['genero'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];

	if ($genero == 'genero') {
		//error 3= 'debe seleccionar un genero'
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


//area de usuarios registrados
if(isset($_POST['btn-login'])){

	$genero  = $_POST['genero'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$correo_log = $_POST['correo_log'];
	$pass_log = $_POST['pass_log'];

	if($correo_log == $correo && $pass_log == $password){

			if (!isset($_GET['inicio'])) {
				
				//crear session
				session_start();

				//almacenar nombre de usuario en una variable 

				$_SESSION['usuario'] = $_POST['nombre'];
				$_SESSION['genero'] = $_POST['genero'];
				$_SESSION['email'] = $_POST['correo'];
				$_SESSION['pass'] = $_POST['password'];

				include('../../../views/admin/index.php');
			}

	}

	else{
		//error 2 = 'Los datos de acceso no coinciden!'
		header('Location: http://localhost/WebM/index.php?error=2');
	}
}


//Mensaje enviado
if(isset($_POST['btn-menssage'])){

	$dest_msg = $_POST['dest_msg'];
	$asunto_msg = $_POST['asunto_msg'];
	$msg = $_POST['msg'];

	if(isset($dest_msg)){

		//crear sesion
		session_start();

		include ('../../../views/admin/inbox.php');
	}
}


//Leer mensaje
if(isset($_POST['btn-read'])){

	$dest_msg = $_POST['dest_msg'];
	$asunto_msg = $_POST['asunto_msg'];
	$msg = $_POST['msg'];


		//crear sesion
		session_start();


	if(isset($dest_msg)){

		include ('../../../views/admin/read.php');
	}
}

?>