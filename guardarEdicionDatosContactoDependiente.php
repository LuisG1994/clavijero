<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$correop = $_POST['correop'];
	$celular = $_POST['celular'];
	$casa = $_POST['casa'];
	
	
	$consulta = "UPDATE datoscontactodependiente SET CorreoPersonal='".$correop."',Celular='".$celular."', TelefonoCasa='".$casa."' WHERE ID=".$id;

	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaDatosContactoDependiente.php");
			}else{
				header("Location: editarDatosContactoDependiente.php?error=NoSePudoActualizar");
			}
	?>