<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos Empleados</title>
</head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<body>
<form id="tablaJoin" name="tablaJoin">
	<nav class="navbar">
              <a class="navbar-brand">
          <img src="img/Logos-ICC.png"">
        </a> 
          <ul class="navbar-nav ml-auto">
            <a class="btn btn-warning btn-sm" href="menuprincipal.php" style="color:white; margin: 10%">Menú</a>
              <a class="btn btn-warning btn-sm" href="logout.php" style="color:white;">Cerrar Sesion</a>
          </ul>
        </nav>

        <div class="container py-4">
            <h3>Registros de Empleados</h3>
            <div class="row">

            <div class="container py-3">
            <h5>Aquí puedes visualizar todos sus datos</h5>
            <div class="row">

	<table border="1" class='rounded table-hover table-responsive border-warning'>
		<thead>
			<tr>
			<th class="text-center table-warning">CURP Empleado</th>
			<th class="text-center table-warning">Nombre</th>
			<th class="text-center table-warning">Apellido Paterno</th>
			<th class="text-center table-warning">Apellido Materno</th>
			<th class="text-center table-warning">Sexo</th>
			<th class="text-center table-warning">Fecha de Nacimiento</th>
			<th class="text-center table-warning">Estado Civil</th>
			<th class="text-center table-warning">RFC</th>
			<th class="text-center table-warning">Seguro Social</th>
			<th class="text-center table-warning">INE</th>
			<th class="text-center table-warning">Tipo Sangre</th>
			<th class="text-center table-warning">Calle</th>
			<th class="text-center table-warning">Número</th>
			<th class="text-center table-warning">Colonia</th>
			<th class="text-center table-warning">Localidad</th>
			<th class="text-center table-warning">Municipio</th>
			<th class="text-center table-warning">Estado</th>
			<th class="text-center table-warning">Correo</th>
			<th class="text-center table-warning">Teléfono</th>
			<th class="text-center table-warning">Imagen</th>
			<th class="text-center table-warning">Cargo</th>
			<th class="text-center table-warning">Departamento</th>
			<th class="text-center table-warning">Subdirección</th>
			<th class="text-center table-warning">Piso</th>
			<th class="text-center table-warning">Número de Extension</th>
			<th class="text-center table-warning">¿Es responsable?</th>
			<th class="text-center table-warning">Enfermedad ó Alergia</th>
			<th class="text-center table-warning">Observaciones</th>
			<th class="text-center table-warning">Máximo de Estudios</th>
			<th class="text-center table-warning">Estudios Alcanzados</th>
			<th class="text-center table-warning">Número del Comprobante de Estudios</th>
			<th class="text-center table-warning">Nombre del Plantel Educativo</th>
			<th class="text-center table-warning">Duración del Plan Educativo</th>
			<th class="text-center table-warning">Número de Cédula</th>
			<th class="text-center table-warning">Número de Dependientes</th>
			<th class="text-center table-warning">Curp del Dependiente</th>
			<th class="text-center table-warning">Nombre</th>
			<th class="text-center table-warning">Apellido Paterno</th>
			<th class="text-center table-warning">Apellido Materno</th>
			<th class="text-center table-warning">Calle</th>
			<th class="text-center table-warning">Numero</th>
			<th class="text-center table-warning">Colonia</th>
			<th class="text-center table-warning">Localidad</th>
			<th class="text-center table-warning">Municipio</th>
			<th class="text-center table-warning">Estado</th>
		</tr>
	</thead>

<?php 
            if(!isset($conexion)) { 
              include("conexion.php");
            }
            $sql = "SELECT Empleado.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, Empleado.Sexo,Empleado.FecNac, Empleado.EstadoCivil, Empleado.RFC,Empleado.SegSocial, Empleado.INE, Empleado.TipoSangre, Empleado.Calle, Empleado.Numero, Empleado.Colonia, Empleado.Localidad, Empleado.Municipio, Empleado.Estado, Correo.Correo,Telefono.Celular, imagen.Imagen, cargo.Cargo, departamento.Departamento, subdireccion.Subdireccion, piso.Piso, extension.NumeroExtension, extension.Responsable, alergia.Alergia, observacion.Observacion, estudio.MaxEstudio, estudio.EstudioAlcanzado, estudio.NumComprobEst, estudio.Escuela, estudio.Duracion, estudio.Cedula, dependienteeconomico.NumDependiente, dependienteeconomico.CurpDependiente, dependienteeconomico.Nombre, dependienteeconomico.ApPaterno, dependienteeconomico.ApMaterno, dependienteeconomico.Calle, dependienteeconomico.Numero, dependienteeconomico.Colonia, dependienteeconomico.Localidad, dependienteeconomico.Municipio, dependienteeconomico.Estado  from Empleado inner join Correo ON Empleado.CURPEmpleado = correo.CURPEmpleado inner join Telefono ON Empleado.CURPEmpleado = Telefono.CurpEmpleado inner join Imagen ON Empleado.CURPEMpleado = Imagen.CURPEMpleado inner join Cargo ON Empleado.CURPEmpleado = Cargo.CURPEmpleado inner join Departamento ON Empleado.CURPEmpleado = Departamento.CURPEmpleado inner join Subdireccion ON Empleado.CURPEmpleado = Subdireccion.CURPEmpleado inner join Piso ON Empleado.CURPEmpleado = Piso.CURPEmpleado inner join Extension ON Empleado.CURPEmpleado = Extension.CURPEmpleado inner join Alergia ON Empleado.CURPEmpleado = Alergia.CURPEmpleado inner join Observacion ON Empleado.CURPEMpleado = Observacion.CURPEmpleado inner join Estudio ON Empleado.CURPEmpleado = Estudio.CURPEmpleado inner join DependienteEconomico ON Empleado.CURPEmpleado = DependienteEconomico.CURPEmpleado;";
            $ejecutar_consulta = $conexion->query($sql);

				while ($reg = $ejecutar_consulta->fetch_assoc()) {
					echo "<tr align='center'>";
            		echo "<td>".utf8_encode($reg["CURPEmpleado"])."</td>";
            		echo "<td>".utf8_encode($reg["Nombre"])."</td>";
            		echo "<td>".utf8_encode($reg["ApPaterno"])."</td>";
            		echo "<td>".utf8_encode($reg["ApMaterno"])."</td>";
            		echo "<td>".utf8_encode($reg["Sexo"])."</td>";
            		echo "<td>".utf8_encode($reg["FecNac"])."</td>";
            		echo "<td>".utf8_encode($reg["EstadoCivil"])."</td>";
            		echo "<td>".utf8_encode($reg["RFC"])."</td>";
            		echo "<td>".utf8_encode($reg["SegSocial"])."</td>";
            		echo "<td>".utf8_encode($reg["INE"])."</td>";
            		echo "<td>".utf8_encode($reg["TipoSangre"])."</td>";
            		echo "<td>".utf8_encode($reg["Calle"])."</td>";
            		echo "<td>".utf8_encode($reg["Numero"])."</td>";
            		echo "<td>".utf8_encode($reg["Colonia"])."</td>";
            		echo "<td>".utf8_encode($reg["Localidad"])."</td>";
            		echo "<td>".utf8_encode($reg["Municipio"])."</td>";
            		echo "<td>".utf8_encode($reg["Estado"])."</td>";
            		echo "<td>".utf8_encode($reg["Correo"])."</td>";
            		echo "<td>".utf8_encode($reg["Celular"])."</td>";
            		echo "<td><img src='".$reg["Imagen"]."' width='100'></td>";
            		echo "<td>".utf8_encode($reg["Cargo"])."</td>";
            		echo "<td>".utf8_encode($reg["Departamento"])."</td>";
            		echo "<td>".utf8_encode($reg["Subdireccion"])."</td>";
            		echo "<td>".utf8_encode($reg["Piso"])."</td>";
            		echo "<td>".utf8_encode($reg["NumeroExtension"])."</td>";
            		echo "<td>".utf8_encode($reg["Responsable"])."</td>";
            		echo "<td>".utf8_encode($reg["Alergia"])."</td>";
            		echo "<td>".utf8_encode($reg["Observacion"])."</td>";
            		echo "<td>".utf8_encode($reg["MaxEstudio"])."</td>";
            		echo "<td>".utf8_encode($reg["EstudioAlcanzado"])."</td>";
            		echo "<td>".utf8_encode($reg["NumComprobEst"])."</td>";
            		echo "<td>".utf8_encode($reg["Escuela"])."</td>";
            		echo "<td>".utf8_encode($reg["Duracion"])."</td>";
            		echo "<td>".utf8_encode($reg["Cedula"])."</td>";
            		echo "<td>".utf8_encode($reg["NumDependiente"])."</td>";
            		echo "<td>".utf8_encode($reg["CurpDependiente"])."</td>";
            		echo "<td>".utf8_encode($reg["Nombre"])."</td>";
            		echo "<td>".utf8_encode($reg["ApPaterno"])."</td>";
            		echo "<td>".utf8_encode($reg["ApMaterno"])."</td>";
            		echo "<td>".utf8_encode($reg["Calle"])."</td>";
            		echo "<td>".utf8_encode($reg["Numero"])."</td>";
            		echo "<td>".utf8_encode($reg["Colonia"])."</td>";
            		echo "<td>".utf8_encode($reg["Localidad"])."</td>";
            		echo "<td>".utf8_encode($reg["Municipio"])."</td>";
            		echo "<td>".utf8_encode($reg["Estado"])."</td>";
            		echo "</tr>";
        }
?>
	</table>
</div>
</div>
</div>
</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" style="color:white;">
                Paseo de los Alpes N° 24, Fracc. Cumbres de las Ánimas</br>
                C.P. 91190, Xalapa, Veracruz</br>
                (228) 841 77 00
        </a> 
    </nav>

</form>

</body>
</html>