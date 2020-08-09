<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$maximo = $_POST['maximo'];
	$estudio = $_POST['estudio'];
	$comprobante = $_POST['numcomprobest'];
	$escuela = $_POST['escuela'];
	$duracion = $_POST['duracion'];
	$cedula = $_POST['cedula'];
	
	$consulta = "UPDATE estudio SET MaxEstudio='".$maximo."',EstudioAlcanzado='".$estudio."',NumComprobEst='".$comprobante."',Escuela='".$escuela."',Duracion='".$duracion."',Cedula='".$cedula."' WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaEstudios.php");
			}else{
				header("Location: editarEstudio.php?error=NoSePudoActualizar");
			}
	?>