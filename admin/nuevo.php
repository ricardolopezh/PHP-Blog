<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="/evidencia/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/evidencia/css/estilos.css">
</head>
<body>

	<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="/evidencia">Titulo</a>

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
 		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="/evidencia/recientes.php">Recientes</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="/evidencia/secciones.php">Categorías</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="/evidencia/contacto.php">Contacto</a>
		    </li>
		  </ul>
		</div>

</nav>

	<div class="container" id="containerAdmin">
	<h4>Crear nueva entrada</h4>

	<div class="row">
		<div class="col-12">

			<form action="form-nuevo.php" method="POST" id="formEntrada" attribute: enctype="multipart/form-data">
				<div class="form-group row">
					<label for="titulo" class="col-lg-12 col-form-label">Titulo: </label>
					<div class="col-12">
						<input type="text" name="inputTitulo" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label for="autor" class="col-lg-12 col-form-label">Autor: </label>
					<div class="col-12">
						<input type="text" name="inputAutor" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-12" for="contenido">Contenido: </label>
					<div class="col-12">
						<textarea class="form-control" name="contenido" rows="3"></textarea>
					</div>		
				</div>

				<div class="form-group row">
					<label class="col-lg-12" for="selectCategoria">Categoría: </label>
					<div class="col-12">
						<select class="form-control" name="inputCategoria">
						  	<option value="Accion">Acción</option>
						  	<option value="Aventura">Aventura</option>
						  	<option value="Romance">Romance</option>
						  	<option value="Ciencia Ficcion">Ciencia Ficción</option>
						</select>
					</div>
				</div>

				  <div class="form-group col-12">
				    <label for="file">Subir imagen: </label>
				  	<input type="file" accept="image/* class="form-control-file" name="file" id="file">
				  </div>

				<div class="col-12">
					<button type="submit" id="btn-publicar" class="btn btn-primary">Publicar</button>
				</div>		
			</form>
			<div class="col-12">
				<button class="btn btn-danger" id="btn-salir" >Salir</button>
			</div>
	</div>
</div>

<script src="/evidencia/js/jquery.min.js"></script>
<script src="/evidencia/js/bootstrap.js"></script>
<script src="/evidencia/js/jquery.min.js"></script>
<script src="/evidencia/js/app.js"></script>
</body>
</html>