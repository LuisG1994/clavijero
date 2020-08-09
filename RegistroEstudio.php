<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro Estudios</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/registro.css">
</head>
<body>
<form id="Estudios" name="Estudios" method="post" action="AltaEstudioSQL.php">
	
<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="MenuEstudios.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="RegistroEstudio.php" aria-label="Previous">
  <span class="icon-arrow-right" aria-hidden="true"></span>
  </a>
</div>


<div class="container py-4">
            <h3>Registro de Empleado</h3>
            <div class="row">

        <div class="container py-3">
            <h5>Datos Escolares</h5>
            <div class="row">

<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
  <label for="curp">CURP del Empleado</label>
    <div>
	     <select class="form-control input-sm" name="curp" id="curp" required title="Debe seleccionar un CURP." onchange="from(document.Estudios.curp.value, 'div-matrix')">
                      <option value="">Selecciona Curp del Empleado</option>
                      <?php 
                        if(!isset($conexion)){
                          include("conexion.php");
                        }
                        $consulta = "SELECT CURPEmpleado, Nombre, ApPaterno, ApMaterno FROM empleado";
                        $ejecutar_consulta = $conexion->query($consulta);
                        while($registro = $ejecutar_consulta->fetch_assoc()){
                          echo "<option value='";
                          echo $registro["CURPEmpleado"];
                          echo "'>";
                          echo $registro["CURPEmpleado"];
                          echo " - ";
                          echo $registro["Nombre"];
                          echo " ";
                          echo $registro["ApPaterno"];
                          echo " ";
                          echo $registro["ApMaterno"];
                          echo "</option>";
                        }
                      ?>
                      </select>
    </div>
  </div>
    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="maxestudio">Máximo de Estudios</label>
        <div>
          <select class="form-control input-sm" name="maxestudio" id="maxestudio">
    	<option value="">Selecciona el Max de Estudios</option>
    	<option value="tecnica">Carrera tecnica</option>
    	<option value="licencitura">Licenciatura</option>
    	<option value="especialidad">Especialidad</option>
    	<option value="maestria">Maestria</option>
    	<option value="doctorado">Doctorado</option>
    	<option value="posdoctorado">Posdoctorado</option>
          </select>
        </div>
    </div>
    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="estudioalcanzado">Nombre del Estudio</label>
        <div>
          <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Ej: Ingeniería en Sistemas" required>
        </div>
    </div>

    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">  
      <label for="numcomprobest">Numero del comprobante de estudios</label>
        <div>
          <input type="text" id="numcomprobest" name="numcomprobest" class="form-control"  placeholder="Ej: 123456" required>
        </div>
    </div>
    
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
      <label for="escuela">Nombre del Plantel Educativo</label>
        <div>
          <input type="text" id="escuela" name="escuela" class="form-control"  placeholder="Ej: Universidad Veracruzana" required>
        </div>
    </div>
    
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
      <label for="duracion">Duracion del Plan Educativo</label>
        <div>
          <input type="text" id="duracion" name="duracion" class="form-control"  placeholder="Ej: 8 semestres" required>
        </div>
    </div>
   
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="cedula">Numero de Cedula</label>
        <div>
          <input type="text" id="cedula" name="cedula" class="form-control"  placeholder="Ej: 567890" required>
        </div>
    </div>
   
  <div class="container py-3">
            <div class="row">
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label></label>
          <div>
              <button class="btn btn-warning btn-block" type="submit" style="color:white;">Registrar
              <span class="icon-document-alt-fill"></span> </button>
          </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
     <br>
          <br>
<?php include("pie.php"); ?>
</form>
</body>
</html>