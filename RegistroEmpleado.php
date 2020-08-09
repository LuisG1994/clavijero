<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro Empleado</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/registro.css">
</head>
<body>
<form enctype="multipart/form-data" id="Empleado" name="Empleado" method="post" action="AltaEmpleadoSQL.php">

<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="MenuEmpleado.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="" aria-label="Previous">
  <span class="icon-arrow-right"></span>
  </a>
</div>


    <div class="container py-4">
            <h3>Registro de Empleado</h3>
            <div class="row">

        <div class="container py-3">
            <h5>Datos Personales</h5>
            <div class="row">

	<div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
	   <label for="curp">Curp</label>
        <div>
            <input type="text" id="curp" name="curp"  class="form-control"  placeholder="Ej: GOGL941213HVZMRS12"style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="nombre">Nombre</label>
        <div>
            <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Ej: Jóse" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="apellpaterno">Apellido Paterno</label>
        <div>
            <input type="text" id="appaterno" name="appaterno" class="form-control"  placeholder="Ej: Sánchez" required>
        </div>
     </div> 

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="apellmaterno">Apellido Materno</label>
        <div>
            <input type="text" id="apmaterno" name="apmaterno" class="form-control"  placeholder="Ej: García" required>
        </div>
    </div> 

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="apellmaterno">Seleccione imagen a cargar</label>
        <div>
            <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
        </div>
    </div> 

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
                    <label for="sexo">Sexo</label>
                    <div>
                        <select class="form-control input-sm" id="sexo" name="sexo">
                            <option value="selecciona">-Selecciona el sexo-</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            </select>
                    </div>              
                </div> 

        <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
            <label for="fechanac">Fecha de Nac</label>
            <div>
                <input type="date" id="fechanac" name="fechanac" class="form-control" required>
            </div>
        </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">     
        <label for="estcivil">Estado Civil</label>
        <div>
            <input type="text" id="estcivil" name="estcivil" class="form-control"  placeholder="Ej: Soltero" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3"> 
        <label for="rfc">RFC</label>
        <div>
            <input type="text" id="rfc" name="rfc" class="form-control"  placeholder="Ej: GOGL941213FQ3" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="segurosocial">Número de Seguro Social</label>
        <div>
            <input type="text" id="segurosocial" name="segurosocial" class="form-control"  placeholder="Ej: 25149498132" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="ine">INE</label>
        <div>
            <input type="text" id="ine" name="ine" class="form-control"  placeholder="Ej: 12325149498123" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="tiposangre">Tipo de Sangre</label>
        <div>
            <input type="text" id="tiposangre" name="tiposangre" class="form-control" placeholder="Ej: A/B/O/A+/B+/O+" required>
        </div>
    </div>

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
        <label for="correoi">Correo de la Institución</label>
        <div>
            <input type="text" id="correoi" name="correoi" class="form-control" placeholder="Ej: ghernadez@icc.com" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="telefonocasa">Teléfono de Casa</label>
        <div>
            <input type="text" id="telefonocasa" name="telefonocasa" class="form-control" placeholder="Ej: (228) 119 1718" required>
        </div>
    </div>

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="celular">Teléfono Celular</label>
        <div>
            <input type="text" id="celular" name="celular" class="form-control" placeholder="Ej: (228) 119 1718" required>
        </div>
    </div>

        </div>
    </div>

    <div class="container py-3">
            <h5>Datos dentro de la Empresa</h5>
            <div class="row">
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="cargo">Cargo</label>
        <div>
            <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Ej: Jefe de Tecnologías" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="depto">Departamento</label>
        <div>
            <input type="text" id="depto" name="depto" class="form-control" placeholder="Ej: Tecnologías" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="subdireccion">Subdirección</label>
        <div>
            <input type="text" id="subdireccion" name="subdireccion" class="form-control" placeholder="Ej: Sistemas" required>
        </div>
    </div>
    
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="piso">Piso</label>
            <div>   
            <select class="form-control input-sm" name="piso" id="piso">
       <option value="">Selecciona el piso</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
   </select>
            </div>
    </div>
        
    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">   
        <label for="extension">Extensión</label>
            <div>
                <input type="text" id="extension" name="extension" class="form-control" placeholder="Ej: 1234" required>
            </div>
    </div>
   
    <div class="col-lg-4 con-md-3 col-sm-3 col-xs-3">
        <label for="piso">Responsable de la Extensión</label>
            <div>  
                <select class="form-control input-sm" name="responsable" id="responsable">
                   <option value="">Selecciona si es Responsable</option>
                   <option value="si">Sí</option>
                   <option value="no">No</option>
                </select>
            </div>
    </div>

        </div>
    </div>
    
    <div class="container py-3">
            <h5>Otros datos</h5>
            <div class="row">

    <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
        <label for="enfermedad">Enfermedad o Alergía</label>
        <div>
            <input type="text" id="enfermedad" name="enfermedad" class="form-control" placeholder="Ej: Rinitis" required>
        </div>
    </div>

    <div class="col-lg-6 con-md-3 col-sm-3 col-xs-3">  
    <label for="observacion">Observaciones</label>
        <div>
            <input type="text" id="observacion" name="observacion" class="form-control" placeholder="Ej: Es un buen empleado..." required>
        </div>
    </div>

            </div>
        </div>

        <div class="col-lg-3 con-md-3 col-sm-3 col-xs-3">
                    <label></label>
                    <div>
                    <button class="btn btn-warning btn-block" type="submit" style="color:white;">Registrar <span class="icon-document-alt-fill"></span> </button>
                    </div>
                </div>
        </div>
</div>

<br>
<br>
     <br>
          <br>
<?php include("pie.php"); ?>
</form>
</body>
</html>