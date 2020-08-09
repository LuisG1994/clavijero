<?php

if(!isset($conexion)){
		include("conexion.php");
	} 

$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/".$foto;
copy($ruta, $destino);

		$curpempleado = $_POST["curp"];
		$nombre = $_POST["nombre"];
		$appaterno = $_POST["appaterno"];
		$apmaterno = $_POST["apmaterno"];
		$sexo = $_POST["sexo"];
		$fechanac = $_POST["fechanac"];
		$estcivil = $_POST["estcivil"];
		$rfc = $_POST["rfc"];
		$segsocial = $_POST["segurosocial"];
		$ine = $_POST["ine"];
		$tiposangre = $_POST["tiposangre"];
		$calle = $_POST["calle"];
		$numero = $_POST["numero"];
		$colonia = $_POST["colonia"];
		$localidad = $_POST["localidad"];
		$municipio = $_POST["municipio"];
		$estado = $_POST["estado"];

		$correop = $_POST["correop"];
		$correoi = $_POST["correoi"];
		$telefonocasa = $_POST["telefonocasa"];
		$celular = $_POST["celular"];

		$cargo = $_POST["cargo"];
		$depto = $_POST["depto"];
		$subdireccion = $_POST["subdireccion"];
		$piso = $_POST["piso"];
		$extension = $_POST["extension"];
		$responsable = $_POST["responsable"];

		$alergia = $_POST["enfermedad"];
		$observacion = $_POST["observacion"];

		$consulta = "INSERT INTO empleado (CURPEmpleado, Nombre, ApPaterno, ApMaterno, Sexo, FecNac, EstadoCivil, RFC, SegSocial, INE, TipoSangre, Calle, Numero, Colonia, Localidad, Municipio, Estado) VALUES ('$curpempleado', '$nombre','$appaterno', '$apmaterno', '$sexo', '$fechanac', '$estcivil', '$rfc', '$segsocial', '$ine', '$tiposangre', '$calle', '$numero', '$colonia', '$localidad', '$municipio', '$estado')";
			

		$consulta2 = "INSERT INTO imagen (CURPEmpleado, Imagen) VALUES ('$curpempleado', '$destino')";


		$consulta3 = "INSERT INTO datoscontacto (CURPEmpleado, CorreoPersonal, CorreoInstitucion, TelefonoCasa, TelefonoCelular) VALUES ('$curpempleado', '$correop','$correoi', '$telefonocasa', '$celular')";

		$consulta4 = "INSERT INTO datosempresa (CURPEmpleado, Cargo, Depto, Subdireccion, Piso, Extension, Responsable) VALUES ('$curpempleado', '$cargo','$depto', '$subdireccion', '$piso', '$extension', '$responsable')";

		$consulta6 = "INSERT INTO otro (CURPEmpleado, EnfermedadAlergia, Observacion) VALUES ('$curpempleado', '$alergia','$observacion')";

			$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
			$ejecutar_consulta2 = $conexion->query(utf8_decode($consulta2));
			$ejecutar_consulta3 = $conexion->query(utf8_decode($consulta3));
			$ejecutar_consulta4 = $conexion->query(utf8_decode($consulta4));
			$ejecutar_consulta6 = $conexion->query(utf8_decode($consulta6));

			if($ejecutar_consulta && $ejecutar_consulta2 && $ejecutar_consulta3 && $ejecutar_consulta4 && $ejecutar_consulta6){
				$mensaje = "Se ha dado de alta: <strong>".$curpempleado."</strong>.";
				header("Location: tablaEmpleado.php");
			}else{
				header("Location: RegistroEmpleado.php?error=NoSePuedeAgregar");
			}

	?>