<?php

?>
<?php
	function conectarse()
	{
		$servidor 	=	 "localhost";
		$usuario 	=	 "root";
		$password 	=	 "";
		$bd 		=	 "clavijero";

		$conectar = new mysqli($servidor, $usuario, $password, $bd);
		    return $conectar;
	}

	$conexion = conectarse();
?>