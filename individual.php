<?php
	include("header.php");
	include("conexion.php");
	$id = $_GET['id'];
?>

<div class="container mt-3">
	<div class="row">


	<?php

		//Mostrar la publicación seleccionada
		$consulta = "SELECT * FROM tbl_posts WHERE id = '$id' LIMIT 1";
		$resultado = mysqli_query($conexion,$consulta);

		while ($row=mysqli_fetch_row($resultado))
		{
			echo "<div class='col-12 col-sm-12 col-md-8 col-lg-8'>";
			echo "<div class='card bg-light'>";
			echo "<img class='card-img-top zoom' src='$row[5]' alt='Card image cap'>";
			echo "<div class='card-body'>";
			echo "<h5 class='card-title'>$row[1]</h5>";
			echo "<p class='card-text'>$row[2]</p>";
			echo "<br>";
			echo "<p>Genero: $row[4]</p>";
			echo "<p><small class='text-muted'>Escrito por: $row[3]</small></p>";
			echo "<p class='card-text'><small class='text-muted'>Fecha: $row[6]</small></p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
	?>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 sidebar">
			<h5>Te puede interesar</h5>

			<ul class="list-group list-group-flush">
				<?php 
				//Mostrar 4 posts en barra lateral
				$consulta = "SELECT * FROM tbl_posts ORDER BY id DESC LIMIT 4";
				$resultado = mysqli_query($conexion,$consulta);

				while ($row=mysqli_fetch_row($resultado))
				{
					echo "<a href='individual.php?id=$row[0]' class='list-group-item sidebar-link'>$row[1]</a>";
				}
				?>
			</ul>
		</div>
	</div><!--row-->
</div><!--Container-->
<?php include("footer.php"); ?>
