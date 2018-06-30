<fieldset id="container">
					<legend>Redactar nuevo mensaje</legend>
						<form class="text-form" name="register" method="post" action="http://localhost/WebM/app/Http/Controllers/Controller.php">
							<p>
								<input class="text-form" type="email" name="dest_msg" placeholder="Para: " required>
							</p>
							<p>
								<input class="text-form" type="text" name="asunto_msg" placeholder="Asunto: " required>
							</p>
							<p>
								<textarea name="msg" rows="5" cols="100" placeholder="Mensaje:" required></textarea>
							</p>

							<p>
								<input class="botones" type="submit" name="btn-menssage" value="Enviar">
								<input class="botones" type="reset"  value="Borrar">
						</form>
					</fieldset>