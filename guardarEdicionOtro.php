<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$alergia = $_POST['alergia'];
	$observacion = $_POST['observacion'];
	
	
	
	$consulta = "UPDATE otro SET EnfermedadAlergia='".$alergia."',Observacion='".$observacion."' WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaOtro.php");
			}else{
				header("Location: editarDatosOtro.php?error=NoSePudoActualizar");
			}
	?>