<?php include("header.php"); ?>

<!--Main Page-->
<div class="container">
<h4>Ultimas Publicaciones</h4>

<?php
		include("conexion.php");
		//Mostrar las 7 publicaciones más recientes
		$consulta = "SELECT * FROM tbl_posts ORDER BY id DESC LIMIT 7";
		$resultado = mysqli_query($conexion,$consulta);
		$contador = 0; 	//Contador de elementos mostrados
		$first = 0; //Usado para mostrar el más reciente en un estilo diferente

		while ($row=mysqli_fetch_row($resultado))
		{
			if($first == 0){
				$first = 1;
				echo "<div class='card'>";
				echo "<div class='card-body'>";
				echo "<h5 class='card-title'>$row[1]</h5>";
				echo "<img src='$row[5]' class='img-principal img-fluid zoom'>";
				echo "<p class='card-text'>" . substr($row[2], 0, 500) . "</p>";
				echo "<a href='individual.php?id=$row[0]' class='btn btn-danger'>Leer más</a>";
				echo "</div>";
				echo "</div>";

				echo "<section class='card-group fila-cartas'>";
			}else{

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
		}
		mysqli_close($conexion);
	?>	
</div><!--Container-->
<?php include("footer.php"); ?>
