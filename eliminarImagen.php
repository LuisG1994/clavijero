<?php
	$conexion = mysqli_connect("localhost","root","","clavijero");
	$id = $_GET['ID'];

mysqli_query($conexion, "DELETE FROM imagen WHERE ID=$id");
mysqli_close($conexion);
	header('Location:tablaImagen.php');
 ?>