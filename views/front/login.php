<?php include ('templates/head.php'); ?>


				<fieldset id="container">
					<legend>Formulario de Ingreso</legend>
					<center>
						<form class="text-form" name="login" method="post" action="http://localhost/WebM/app/Http/Controllers/Auth/AuthController.php">
							<p>
								<input class="text-form" type="email" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input class="text-form" type="password" name="pass_log" placeholder="Contraseña.." required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genero" value="<?php echo $genero; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input class="botones" type="submit" name="btn-login" value="Ingresar">
								<input class="botones" type="reset" value="Cancelar">
							</p>
						</form>
						</center>
					</fieldset>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>