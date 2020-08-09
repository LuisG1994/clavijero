<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Actualizar Dependiente Economico</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/registro.css">
</head>
<body>
<form id="Estudios" name="Estudios" method="post" action="guardarEdicionDependiente.php">

<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="tablaDependiente.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="editarDependiente.php" aria-label="Previous">
  <span class="icon-arrow-right" aria-hidden="true"></span>
  </a>
</div>


<div class="container py-4">
            <h3>Actualización de Empleado</h3>
            <div class="row">

        <div class="container py-3">
            <h5>Datos de Dependientes Económicos</h5>
            <div class="row">

            	 <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
  <label for="curp">ID del Empleado</label>
    <div>

              <?php 
                    error_reporting(0);
                    if(!isset($conexion)){include("conexion.php");}
                    $id = $_GET["ID"];
                    $sql = "SELECT * FROM dependienteeconomico WHERE ID=$id";
                    $ejecutar_consulta = $conexion->query($sql);
                    $registro = $ejecutar_consulta->fetch_assoc();
                    ?>

<?php

$consulta_mysql='select ID from dependienteeconomico where ID='.$id;
$resultado_consulta_mysql1=mysqli_query($conexion,$consulta_mysql);
  
echo "<select class='form-control input-sm' name='id' id='id'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql1)){
    echo "<option value='".$fila['ID']."'>".$fila['ID']."</option>";
}
echo "</select>";
?>
</div>
</div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
	   <label for="curp">Curp</label>
        <div>
            <input type="text" id="curp" name="curp"  value='<?php echo $registro["CURPEmpleado"]; ?>' type="hidden" class="form-control" disabled>
        </div>
    </div>
  <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">     
    <label for="curpdependiente">Curp del Dependiente</label>
    <div>
        <input type="text" id="curpdependiente" name="curpdependiente" class="form-control"  value='<?php echo $registro["CurpDependiente"]; ?>' type="hidden" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"disabled>
      </div>
    </div>
<div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Nombre(s) del Dependiente</label>
      <div>
          <input type="text" id="nombre" name="nombre" class="form-control"  value='<?php echo $registro["NombreD"]; ?>' type="hidden" required>
      </div>
</div>
<div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Apellido Paterno</label>
      <div>
          <input type="text" id="appaterno" name="appaterno" class="form-control"  value='<?php echo $registro["ApPaternoD"]; ?>' type="hidden" required>
      </div>
</div>
<div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Apellido Materno</label>
      <div>
          <input type="text" id="apmaterno" name="apmaterno" class="form-control"  value='<?php echo $registro["ApMaternoD"]; ?>' type="hidden" required>
      </div>
</div>

<div class="container py-3">
            <h5>Domicilio</h5>
            <div class="row">

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="calle">Calle</label>
        <div>
            <input type="text" id="calle" name="calle" class="form-control" value='<?php echo $registro["Calle"]; ?>' required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="numero">Número</label>
        <div>
            <input type="text" id="numero" name="numero" class="form-control" value='<?php echo $registro["Numero"]; ?>' required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="colonia">Colonia</label>
        <div>
            <input type="text" id="colonia" name="colonia" class="form-control" value='<?php echo $registro["Colonia"]; ?>' required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="localidad">Localidad</label>
        <div>
            <input type="text" id="localidad" name="localidad" class="form-control" value='<?php echo $registro["Localidad"]; ?>' required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="municipio">Municipio</label>
        <div>
            <input type="text" id="municipio" name="municipio" class="form-control" value='<?php echo $registro["Municipio"]; ?>' required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="estado">Estado</label>
        <div>
            <input type="text" id="estado" name="estado" class="form-control" value='<?php echo $registro["Estado"]; ?>' required>
        </div>
    </div>

        </div>
    </div>

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
 <br>
          <br>
<?php include("pie.php"); ?>
</form>
</body>
</html>