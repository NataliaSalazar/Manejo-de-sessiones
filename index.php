<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}

?>


			
			<fieldset id="container">
					<legend>Formulario de Registro</legend>
					<center>
						<form class="text-form" name="register" method="post" action="app/Http/Controllers/Controller.php">
							<p>
								<select class="elegir-gene" name="genero" required>
									<option class="text-form" value="masculino">Masculino</option>
									<option class="text-form" value="femenino">Femenino</option>
									<option class="text-form" value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input  class="text-form" id="nombre" type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input  class="text-form" id="correo" type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input  class="text-form" id="password" type="password" name="password" id="password" placeholder="Contraseña.." 
								pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
								onchenge="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entrre 8 y 16 caracteres: (Digitos, minúsculas,
								mayusculas y simbolos)' : ''); if (this.checkValidity()) form.confirm_password.pattern = this.value;" required>
							</p>
							<p>
								<input  class="text-form" id="conf_pass" type="password" name="conf_pass" placeholder="Confirmar contraseña.." 
								pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
								onchenge="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor ingresa la misma contraseña de arriba)' : '');" required>
							</p>
							<p>
								<input class="botones" type="submit" name="btn-register" value="Registrar usuario">
								<input class="botones" type="reset" value="Limpiar datos">
							</p>
						</form>
			</fieldset>
			</center>
			<p><a id="registrado" href="http://localhost/WebM/views/front/login.php" >Ya estoy registrado!</a></p>
		</div>
	</div>
</div>

<?php include ('views/front/templates/foot.php'); ?>