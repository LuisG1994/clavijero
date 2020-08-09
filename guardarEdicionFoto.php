<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/".$foto;
copy($ruta, $destino);
	
	
	
	$consulta = "UPDATE imagen SET Imagen='".$destino."' WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaImagen.php");
			}else{
				header("Location: editarImagen.php?error=NoSePudoActualizar");
			}
	?>