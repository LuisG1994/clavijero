<?php

if(!isset($conexion)){
		include("conexion.php");
	} 
	
	$id = $_POST['id'];
	//$curp = $_POST['curp'];
	//$numdependientes = $_POST["numdependientes"];
		//$curpdependiente = $_POST["curpdependiente"];
		$nombre = $_POST["nombre"];
		$appaterno = $_POST["appaterno"];
		$apmaterno = $_POST["apmaterno"];
		$calle = $_POST["calle"];
		$numero = $_POST["numero"];
		$colonia = $_POST["colonia"];
		$localidad = $_POST["localidad"];
		$municipio = $_POST["municipio"];
		$estado = $_POST["estado"];
	
	$consulta = "UPDATE dependienteeconomico SET NombreD='".$nombre."',ApPaternoD='".$appaterno."',ApMaternoD='".$apmaterno."',Calle='".$calle."',Numero='".$numero."',Colonia='".$colonia."',Localidad='".$localidad."',Municipio='".$municipio."',Estado='".$estado."'  WHERE ID=".$id;
	$ejecutar_consulta = $conexion->query(utf8_decode($consulta));
	if($ejecutar_consulta){
	$mensaje = "Se ha Actualizado el registro: <strong>".$curp."</strong>.";
				header("Location: tablaDependiente.php");
			}else{
				header("Location: editarDependiente.php?error=NoSePudoActualizar");
			}
	?>