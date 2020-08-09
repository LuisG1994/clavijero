
<?php

if(!isset($conexion)){
		include("conexion.php");
	} 

		$curpempleado = $_POST["curp"];
		
		$curpdependiente = $_POST["curpdependiente"];
		$nombre = $_POST["nombre"];
		$appaterno = $_POST["appaterno"];
		$apmaterno = $_POST["apmaterno"];
		$calle = $_POST["calle"];
		$numero = $_POST["numero"];
		$colonia = $_POST["colonia"];
		$localidad = $_POST["localidad"];
		$municipio = $_POST["municipio"];
		$estado = $_POST["estado"];

		$correop = $_POST["correop"];
		$celular = $_POST["celular"];
		$casa = $_POST["casa"];
		
	
		$consulta = "INSERT INTO dependienteeconomico (CURPEmpleado, CurpDependiente, NombreD, ApPaternoD, ApMaternoD, Calle, Numero, Colonia, Localidad, Municipio, Estado) VALUES ('$curpempleado','$curpdependiente', '$nombre', '$appaterno', '$apmaterno', '$calle', '$numero', '$colonia', '$localidad', '$municipio', '$estado')";

		$consulta2 = "INSERT INTO datoscontactodependiente (CurpDependiente, CorreoPersonal, Celular, TelefonoCasa) VALUES ('$curpdependiente', '$correop', '$celular', '$casa')";
			

			$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
			$ejecutar_consulta2 = $conexion->query(utf8_decode($consulta2));

			if($ejecutar_consulta && $ejecutar_consulta2){
				$mensaje = "Se ha dado de alta: <strong>".$curpempleado."</strong>.";
				header("Location: tablaDependiente.php");
			}else{
				header("Location: RegistroDependiente.php?error=NoSePuedeAgregar");
			}

	?>