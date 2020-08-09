<?php
	$conexion = mysqli_connect("localhost","root","","clavijero");
	$id = $_GET['ID'];

mysqli_query($conexion, "DELETE FROM estudio WHERE ID=$id");
mysqli_close($conexion);
	header('Location:tablaEstudios.php');
 ?>