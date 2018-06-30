<?php 

if (isset($_GET['inicio'])) {
	
	session_start();
}

//Encabezado de la pagina
include ('templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('errors/errors.php');
}

?>

<div>
				<figure>
					<?php include('partials/genero.php') ?>
			

		
			<h2>Bienvenid@: <i>

				<?php 
				if(isset($_SESSION['usuario'])){
					echo $_SESSION['usuario'];
				}
				?>
					
				</i></h2>
		<div class="col-12">
			<?php include('forms/form_menssage.php'); ?>
		</div>

<?php include ('templates/foot.php'); 


?>

