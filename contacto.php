<?php include("header.php"); ?>

<div class="container">
	<h4>Contacto</h4>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8">

			<!--Forma de contacto-->
			<form action="form-contacto.php" method="POST">
				<div class="form-group row">
					<label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
					<div class="col-sm-5">
						<input type="text" name="inputNombre" class="form-control" id="inputNombre">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email: </label>
					<div class="col-sm-5">
						<input type="text" name="inputEmail" class="form-control" id="inputEmail">
					</div>
				</div>
				<div class="form-group row">
					<label for="asunto" class="col-sm-2 col-form-label">Asunto: </label>
					<div class="col-sm-5">
						<input type="text" name="inputAsunto" class="form-control" id="inputAsunto">
					</div>
				</div>
				<div class="form-group">
					<label for="mensaje">Mensaje: </label>
					<textarea class="form-control col-lg-7" name="textareaMensaje" id="textareaMensaje" rows="3"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>

		<!--Redes sociales-->
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
			<h5>Redes Sociales</h5>

			<div class="redes-sociales">
				<i class="fab fa-facebook-square fa-2x facebook"></i>
				<a href="#">Facebook</a>
			</div>

			<div class="redes-sociales">
				<i class="fab fa-twitter fa-2x twitter"></i>
				<a href="#">Twitter</a>
			</div>

			<div class="redes-sociales">
				<i class="fab fa-instagram fa-2x instagram"></i>
				<a href="#">Instagram</a>
			</div>

		</div>
	</div>
</div>

<?php include("footer.php"); ?>