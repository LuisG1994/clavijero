<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$cargo = $_POST['cargo'];
	$depto = $_POST['depto'];
	$subdireccion = $_POST['subdireccion'];
	$piso = $_POST['piso'];
	$extension = $_POST['extension'];
	$responsable = $_POST['responsable'];
	
	
	$consulta = "UPDATE datosempresa SET Cargo='".$cargo."',Depto='".$depto."',Subdireccion='".$subdireccion."', Piso='".$piso."', Extension='".$extension."',Responsable='".$responsable."' WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaDatosEmpresa.php");
			}else{
				header("Location: editarDatosEmpresa.php?error=NoSePudoActualizar");
			}
	?>