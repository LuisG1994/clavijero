<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	$correop = $_POST['correop'];
	$correoi = $_POST['correoi'];
	$telefonocasa = $_POST['telefonocasa'];
	$celular = $_POST['celular'];
	
	
	$consulta = "UPDATE datoscontacto SET CorreoPersonal='".$correop."',CorreoInstitucion='".$correoi."',TelefonoCasa='".$telefonocasa."', TelefonoCelular='".$celular."' WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaDatosContacto.php");
			}else{
				header("Location: editarDatosContacto.php?error=NoSePudoActualizar");
			}
	?>