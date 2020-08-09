<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$nombre = $_POST['nombre'];
	$appaterno = $_POST['appaterno'];
	$apmaterno = $_POST['apmaterno'];
	$sexo = $_POST['sexo'];
	$fechanac = $_POST['fechanac'];
	$estadocivil = $_POST['estcivil'];
	$rfc = $_POST['rfc'];
	$segurosocial = $_POST['segurosocial'];
	$ine = $_POST['ine'];
	$tiposangre = $_POST['tiposangre'];
	$calle = $_POST['calle'];
	$numero = $_POST['numero'];
	$colonia = $_POST['colonia'];
	$localidad = $_POST['localidad'];
	$municipio = $_POST['municipio'];
	$estado = $_POST['estado'];
	
	
	$consulta = "UPDATE empleado SET Nombre='".$nombre."',ApPaterno='".$appaterno."',ApMaterno='".$apmaterno."',Sexo='".$sexo."',FecNac='".$fechanac."',EstadoCivil='".$estadocivil."',RFC='".$rfc."',SegSocial='".$segurosocial."',INE='".$ine."',TipoSangre='".$tiposangre."',Calle='".$calle."',Numero='".$numero."',Colonia='".$colonia."',Localidad='".$localidad."',Municipio='".$municipio."',Estado='".$estado."'  WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_encode(utf8_decode($consulta)));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaEmpleado.php");
			}else{
				header("Location: editarEmpleado.php?error=NoSePudoActualizar");
			}
	?>