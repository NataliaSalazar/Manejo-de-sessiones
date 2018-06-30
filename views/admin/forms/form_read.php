<fieldset id="container">

	<legend>Nuevo mensaje de:</legend>
					<div id="de">
					<?php
					if (isset($_SESSION['email'])) {
						echo $_SESSION['email'];
					}
					?>
					</div>

						<form class="text-form" name="register" method="post" action="http://localhost/WebM/app/Http/Controllers/Controller.php">
							<p>
								<input class="text-form" type="email" value="<?php echo $asunto_msg; ?>" readonly>
							</p>
							<p>
								<input class="text-form" type="text" value="<?php echo $dest_msg; ?>" readonly>
							</p>
							<p>
								<textarea rows="5" cols="100" readonly><?php echo $msg; ?></textarea>
							</p>
							
						</form>
					</fieldset>