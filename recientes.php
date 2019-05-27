<?php include("header.php"); ?>

<div class="container">
	<h4>Publicaciones Recientes</h4>

	<section class='card-group fila-cartas'>

	<?php
		include("conexion.php");
		//Mostrar las 6 publicaciones más recientes
		$consulta = "SELECT * FROM tbl_posts ORDER BY id DESC LIMIT 6";
		$resultado = mysqli_query($conexion,$consulta);
		$contador = 0; 	//Contador de elementos mostrados

		while ($row=mysqli_fetch_row($resultado))
		{
			$contador = $contador + 1;

			echo "<div class='card mx-auto'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<a href='individual.php?id=$row[0]' class='card-title titulo-link'>$row[1]</a>";
			echo "<p class='card-text'>".substr($row[2], 0, 150).
			"... <a href='individual.php?id=$row[0]' class='sidebar-link'>Seguir Leyendo</a> </p>";
			echo "</div>";
			echo "</div>";

			//Cada 3 elementos crear una nueva seccion
			if(($contador % 3) == 0){
				echo "</section>";
				echo "<section class='card-group fila-cartas'>";
			}
		}
		mysqli_close($conexion);
	?>

</div><!--Container-->
<?php include("footer.php"); ?>