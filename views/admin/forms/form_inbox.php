<fieldset id="container">
					<legend>Mensaje recibido..</legend>
						<form class="text-form" name="register" method="post" action="http://localhost/WebM/app/Http/Controllers/Controller.php">
							<p>
								<label class="text-form">Asunto: </label><input  type="submit" name="btn-read" value="<?php echo $asunto_msg; ?>" id="asunto">
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="dest_msg" value="<?php echo $dest_msg; ?>">
								<input type="hidden" name="asunto_msg" value="<?php echo $asunto_msg; ?>">
								<input type="hidden" name="msg" value="<?php echo $msg; ?>">
							</p>
						</form>
					</fieldset>

