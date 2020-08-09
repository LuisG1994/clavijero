
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,shrink-to-fit=no" />
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/Menu.css">
<link rel="stylesheet"  href="css/encabezado.css">
<link rel="stylesheet"  type="text/css" href="fonts.css">
<link rel="stylesheet"  href="css/flecha.css">
     </head>
  <body>

<?php include("encabezado.php"); ?>


<div id="paginacion">
  <a href="MenuPrincipal.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="" aria-label="Previous">
  <span class="icon-arrow-right"></span>
  </a>
</div>


        <div class="container py-3">
            <center><h3>Menú Empleado</h3></center>
          </div>

            <div class="box">
    <div class="container">
      <div class="row">
        



            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/anadir.png">
          </div>              
            <div class="title">
              <h4>Agregar Empleado</h4>
            </div>
                        
            <div class="text">
              <br>
              <br>
              <p>Realizar nuevo registro de informacion de empleado.</p>

            </div>  

            <a class="button orange radius" href="RegistroEmpleado.php">INGRESAR
            <span class="icon-check-alt"></span></a> 


            </div>
            </div>

        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/empresa.png">
          </div>              
            <div class="title">
              <h4>Información del Empleado dentro de la Empresa</h4>
            </div> 
            <div class="text">
              <p>Visualizar información los Empleados dentro de la Empresa.</p>
            </div>     
            <a class="button orange radius" href="tablaDatosEmpresa.php">INGRESAR
            <span class="icon-check-alt"></span></a> 
                        
           </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">      
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/actualizar.png">
          </div>              
            <div class="title">
              <h4>Datos personales del Empleado</h4>
            </div>    
            <div class="text">
              <br>
              <p>Actualizar y eliminar información personal del Empleado.</p>
            </div>
            <a class="button orange radius" href="tablaEmpleado.php">INGRESAR
            <span class="icon-check-alt"></span></a>    

          </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">      
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/contacto.png">
          </div>              
            <div class="title">
              <h4>Editar Datos de Contacto Empleado</h4>
            </div>    
            <div class="text">
              <br>
              <p>Actualizar y eliminar datos de contacto.</p>
            </div>
            <a class="button orange radius" href="tablaDatosContacto.php">INGRESAR
            <span class="icon-check-alt"></span></a>    
          </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">      
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/otrosdatos.png">
          </div>              
            <div class="title">
              <h4>Editar otros datos del Empleado</h4>
            </div>    
            <div class="text">
              <br>
              <p>Actualizar y eliminar otros datos del Empleado.</p>
            </div>
            <a class="button orange radius" href="tablaOtro.php">INGRESAR
            <span class="icon-check-alt"></span></a>  
            </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">      
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/foto.png" width='100'>
          </div>              
            <div class="title">
              <h4>Editar fotografía del Empleado</h4>
            </div>    
            <div class="text">
              <br>
              <p>Actualizar y eliminar fotografía del Empleado.</p>
            </div>
            <a class="button orange radius"  href="tablaImagen.php">INGRESAR
            <span class="icon-check-alt"></span></a>  
            </div>
        </div>

      </div>
    </div>
  </div>
 <div class="container py-3">
            
          </div>
          <div class="container py-3">
            
          </div>
          <div class="container py-3">
            
          </div>
       <br>
          <br>
<?php include("pie.php"); ?>

</body>
</html>
    