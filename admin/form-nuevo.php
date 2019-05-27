<!--JS necesario para funciones más abajo-->
<script src="/evidencia/js/jquery.min.js"></script>
<script src="/evidencia/js/app.js"></script>

<?php 
include("../conexion.php");

//Datos a insertar
$titulo = trim($_POST['inputTitulo']);
$contenido = trim($_POST['contenido']);
$autor = trim($_POST['inputAutor']);
$categoria = trim($_POST['inputCategoria']);

//Escape strings para proteger la BD
$titulo = mysqli_real_escape_string($conexion, $titulo);
$contenido = mysqli_real_escape_string($conexion, $contenido);
$autor = mysqli_real_escape_string($conexion, $autor);
$categoria = mysqli_real_escape_string($conexion, $categoria);

//Validar si se seleccionó un archivo
if(empty($_FILES['file']['tmp_name'])){
	echo "<script type='text/javascript'>error();</script>";
	exit();
}

//datos archivo imagen
$name = $_FILES['file']['name']; //Nombre del archivo
$tmp_name = $_FILES['file']['tmp_name']; //Nombre temporal del archivo
$ubicacion = '../images/subidas/'; //Ubicación de la imagen
$imageCheck = getimagesize($tmp_name); //Obtener el tamaño de la imagen
$imagen = "images/subidas/".$name; //Ubicacion para la BD

//Validar si los campos fueron llenados y se subió una imagen
if(strlen($titulo) > 0 
	and strlen($contenido) > 0 
	and strlen($autor) > 0 
	and strlen($categoria) > 0
	and !empty($name)
	and $imageCheck !== false)
{
	//Todo esta bien, insertar datos y subir imagen

	//Subir imagen
	move_uploaded_file($tmp_name, $ubicacion.$name);

	//Insertar en la BD
	$consulta = "INSERT INTO tbl_Posts(titulo,texto,autor,categoria,imagen) 
	VALUES('$titulo','$contenido','$autor','$categoria','$imagen');";

	mysqli_query($conexion, $consulta);
	//Regresar y avisar que todo salio bien
	echo "<script type='text/javascript'>exito();</script>";

}else{
	//Avisar del error
	echo "<script type='text/javascript'>error();</script>";
}
mysqli_close($conexion); //Cerrar conexión
?>
