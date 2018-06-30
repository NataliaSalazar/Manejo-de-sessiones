<?php
if(isset($_SESSION['genero'])){
	
	$genero = $_SESSION['genero'];

	if ($genero == 'masculino'){
		echo '<img src="http://localhost/WebM/public/images/user.png" class="img">';}

	elseif ($genero == 'femenino'){
		echo '<img src="http://localhost/WebM/public/images/userw.png" class="img">';}
}

?>