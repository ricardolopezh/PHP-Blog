<?php 
include("header.php"); 
include("conexion.php");
?>

<div class="container">
	<h4>Categorías</h4>
	<hr>

	<h3>Acción</h3>
	<section class="card-group fila-cartas">

	<?php
		//Mostrar 3 publicación en la categoría de Acción
		$consulta = "SELECT * FROM tbl_posts WHERE categoria = 'Accion' ORDER BY id DESC LIMIT 3";
		$resultado = mysqli_query($conexion,$consulta);

		while ($row=mysqli_fetch_row($resultado))
		{
			echo "<div class='card mx-auto'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<a href='individual.php?id=$row[0]' class='card-title titulo-link'>$row[1]</a>";
			echo "<p class='card-text'>".substr($row[2], 0, 150).
			"... <a href='individual.php?id=$row[0]' class='sidebar-link'>Seguir Leyendo</a> </p>";
			echo "</div>";
			echo "</div>";
		}
	?>
</section>

<h3>Aventura</h3>
<section class="card-group fila-cartas">

	<?php
		//Mostrar 3 publicación en la categoría de Acción
		$consulta = "SELECT * FROM tbl_posts WHERE categoria = 'Aventura' ORDER BY id DESC LIMIT 3";
		$resultado = mysqli_query($conexion,$consulta);

		while ($row=mysqli_fetch_row($resultado))
		{
			echo "<div class='card mx-auto'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<a href='individual.php?id=$row[0]' class='card-title titulo-link'>$row[1]</a>";
			echo "<p class='card-text'>".substr($row[2], 0, 150).
			"... <a href='individual.php?id=$row[0]' class='sidebar-link'>Seguir Leyendo</a> </p>";
			echo "</div>";
			echo "</div>";
		}
	?>
</section>

<h3>Romance</h3>
<section class="card-group fila-cartas">

	<?php
		//Mostrar 3 publicación en la categoría de Acción
		$consulta = "SELECT * FROM tbl_posts WHERE categoria = 'Romance' ORDER BY id DESC LIMIT 3";
		$resultado = mysqli_query($conexion,$consulta);

		while ($row=mysqli_fetch_row($resultado))
		{
			echo "<div class='card mx-auto'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<a href='individual.php?id=$row[0]' class='card-title titulo-link'>$row[1]</a>";
			echo "<p class='card-text'>".substr($row[2], 0, 150).
			"... <a href='individual.php?id=$row[0]' class='sidebar-link'>Seguir Leyendo</a> </p>";
			echo "</div>";
			echo "</div>";
		}
	?>
</section>

<h3>Ciencia Ficción</h3>
<section class="card-group fila-cartas">

	<?php
		//Mostrar 3 publicación en la categoría de Acción
		$consulta = "SELECT * FROM tbl_posts WHERE categoria = 'Ciencia Ficcion' ORDER BY id DESC LIMIT 3";
		$resultado = mysqli_query($conexion,$consulta);

		while ($row=mysqli_fetch_row($resultado))
		{
			echo "<div class='card mx-auto'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<a href='individual.php?id=$row[0]' class='card-title titulo-link'>$row[1]</a>";
			echo "<p class='card-text'>".substr($row[2], 0, 150).
			"... <a href='individual.php?id=$row[0]' class='sidebar-link'>Seguir Leyendo</a> </p>";
			echo "</div>";
			echo "</div>";
		}
		mysqli_close($conexion);
	?>
</section>

</div><!--Container-->

<?php include("footer.php"); ?>