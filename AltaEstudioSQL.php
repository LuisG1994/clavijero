
<?php

if(!isset($conexion)){
		include("conexion.php");
	} 

		$curpempleado = $_POST["curp"];
		$maxestudio = $_POST["maxestudio"];
		$nombre = $_POST["nombreestudio"];
		$numcomprobest = $_POST["numcomprobest"];
		$escuela = $_POST["escuela"];
		$duracion = $_POST["duracion"];
		$cedula = $_POST["cedula"];
		

		$consulta = "INSERT INTO estudio (CURPEmpleado, MaxEstudio, EstudioAlcanzado, NumComprobEst, Escuela, Duracion, Cedula) VALUES ('$curpempleado', '$maxestudio','$nombre', '$numcomprobest', '$escuela', '$duracion', '$cedula')";
			

			$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
			if($ejecutar_consulta){
				$mensaje = "Se ha dado de alta: <strong>".$curpempleado."</strong>.";
				header("Location: tablaEstudio.php");
			}else{
				header("Location: RegistroEstudio.php?error=NoSePuedeAgregar");
			}
	?>