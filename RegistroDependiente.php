<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro Dependiente Economico</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/registro.css">
</head>
<body>
<form id="Estudios" name="Estudios" method="post" action="AltaDependienteSQL.php">

<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="MenuDependiente.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="RegistroDependiente.php" aria-label="Previous">
  <span class="icon-arrow-right" aria-hidden="true"></span>
  </a>
</div>


<div class="container py-4">
            <h3>Registro de Dependiente</h3>
            <div class="row">

        <div class="container py-3">
            <h5>Datos de Dependientes Económicos</h5>
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
    <label for="curpdependiente">Curp del Dependiente</label>
    <div>
        <input type="text" id="curpdependiente" name="curpdependiente" class="form-control"  placeholder="Ej: GOGL941213HVZMRD03" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
      </div>
    </div>
<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Nombre(s) del Dependiente</label>
      <div>
          <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Ej: José Luis" required>
      </div>
</div>
<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Apellido Paterno</label>
      <div>
          <input type="text" id="appaterno" name="appaterno" class="form-control"  placeholder="Ej: García" required>
      </div>
</div>
<div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">    
    <label for="nombre">Apellido Materno</label>
      <div>
          <input type="text" id="apmaterno" name="apmaterno" class="form-control"  placeholder="Ej: Suárez" required>
      </div>
</div>

<div class="container py-3">
            <h5>Domicilio</h5>
            <div class="row">

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="calle">Calle</label>
        <div>
            <input type="text" id="calle" name="calle" class="form-control" placeholder="Ej: Revolución" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="numero">Número</label>
        <div>
            <input type="text" id="numero" name="numero" class="form-control" placeholder="Ej: 220" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="colonia">Colonia</label>
        <div>
            <input type="text" id="colonia" name="colonia" class="form-control" placeholder="Ej: Lomas de Casa Blanca" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="localidad">Localidad</label>
        <div>
            <input type="text" id="localidad" name="localidad" class="form-control" placeholder="Ej: Plan del Río" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="municipio">Municipio</label>
        <div>
            <input type="text" id="municipio" name="municipio" class="form-control" placeholder="Ej: Emiliano Zapata" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="estado">Estado</label>
        <div>
            <input type="text" id="estado" name="estado" class="form-control" placeholder="Ej: Veracruz" required>
        </div>
    </div>

        </div>
    </div>

    <div class="container py-3">
            <h5>Datos de Contacto</h5>
            <div class="row">

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">  
        <label for="correop">Correo Personal</label>
        <div>
            <input type="text" id="correop" name="correop" class="form-control" placeholder="Ej: ghernadez@gmail.com" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="telefonocasa">Teléfono Celular</label>
        <div>
            <input type="text" id="celular" name="celular" class="form-control" placeholder="Ej: (228) 119 1718" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="celular">Teléfono de Casa</label>
        <div>
            <input type="text" id="casa" name="casa" class="form-control" placeholder="Ej: (228) 119 1718" required>
        </div>
    </div>

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