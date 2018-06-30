<fieldset id="container">

<legend>Datos de usuario</legend>

<?php

if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}

?>



<form class="text-form" method="POST" name="form_datos" action="http://localhost/WebM/app/Http/Controllers/Controller.php">

	<label class="text-form" >Nombre:</label><input type="email" value="<?php echo $_SESSION['usuario']; ?>" class="datosn" readonly>
	<label class="text-form" >Genero:</label><input type="text" value="<?php echo $_SESSION['genero']; ?>" class="datosg" readonly>
	<label class="text-form" >Correo:</label><input type="text" value="<?php echo $_SESSION['email']; ?>" class="datosc" readonly>
	<label class="text-form" >Contraseña:</label><input type="text" value="<?php echo $_SESSION['pass']; ?>" class="datoss" readonly>

</form>
</fieldset>