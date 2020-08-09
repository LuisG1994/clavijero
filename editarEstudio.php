<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Actualizar Estudios</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/registro.css">
</head>
<body>
<form id="Estudios" name="Estudios" method="post" action="guardarEdicionEstudio.php">
	
<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="tablaEstudios.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="editarEstudio.php" aria-label="Previous">
  <span class="icon-arrow-right" aria-hidden="true"></span>
  </a>
</div>


<div class="container py-4">
            <h3>Actualización de Empleado</h3>
            <div class="row">

        <div class="container py-3">
            <h5>Datos Escolares</h5>
            <div class="row">

<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
  <label for="curp">ID del Empleado</label>
    <div>

              <?php 
                    error_reporting(0);
                    if(!isset($conexion)){include("conexion.php");}
                    $id = $_GET["ID"];
                    $sql = "SELECT * FROM estudio WHERE ID=$id";
                    $ejecutar_consulta = $conexion->query($sql);
                    $registro = $ejecutar_consulta->fetch_assoc();
                    ?>

<?php

$consulta_mysql='select ID from estudio where ID='.$id;
$resultado_consulta_mysql1=mysqli_query($conexion,$consulta_mysql);
  
echo "<select class='form-control input-sm' name='id' id='id'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql1)){
    echo "<option value='".$fila['ID']."'>".$fila['ID']."</option>";
}
echo "</select>";
?>
</div>
</div>

<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
  <label for="curp">CURP del Empleado</label>
    <div>
	    <input type="text" name="curp" value='<?php echo $registro["CURPEmpleado"]; ?>' type="hidden" id="curp" class="form-control" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" disabled>
    </div>
  </div>
    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="maxestudio">Máximo de Estudios</label>
        <div>
          <input type="text" name="maximo" value='<?php echo $registro["MaxEstudio"]; ?>' type="hidden" id="maximo" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="estudioalcanzado">Nombre del Estudio</label>
        <div>
          <input type="text" name="estudio" value='<?php echo $registro["EstudioAlcanzado"]; ?>' type="hidden" id="estudio" class="form-control" required>
        </div>
    </div>

    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">  
      <label for="numcomprobest">Numero del comprobante de estudios</label>
        <div>
          <input type="text" name="numcomprobest" value='<?php echo $registro["NumComprobEst"]; ?>' type="hidden" id="numcomprobest" class="form-control" required>
        </div>
    </div>
    
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
      <label for="escuela">Nombre del Plantel Educativo</label>
        <div>
          <input type="text" name="escuela" value='<?php echo $registro["Escuela"]; ?>' type="hidden" id="escuela" class="form-control" required>
        </div>
    </div>
    
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
      <label for="duracion">Duracion del Plan Educativo</label>
        <div>
          <input type="text" id="duracion" name="duracion" class="form-control"  value='<?php echo $registro["Duracion"]; ?>' required>
        </div>
    </div>
   
   <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
      <label for="cedula">Numero de Cedula</label>
        <div>
          <input type="text" id="cedula" name="cedula" class="form-control" value='<?php echo $registro["Cedula"]; ?>' required>
        </div>
    </div>
   
  <div class="container py-3">
            <div class="row">
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label></label>
          <div>
              <button class="btn btn-warning btn-block" type="submit" style="color:white;">Actualizar</button>
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