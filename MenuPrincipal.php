
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <meta charset="UTF-8">
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


     </head>
  <body>

<?php include("encabezado.php"); ?>


        <div class="container py-3">
            <center><h3>Menú</h3></center>
          </div>

            <div class="box">
    <div class="container">
      <div class="row">
        
            <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/usuario.png">
          </div>              
            <div class="title">
              <h4>Empleados</h4>
            </div>
               <br>         
            <div class="text">
              <p>Registrar, actualizar y eliminar información de los Empleados.</p>
            </div>
                        
            <a class="button orange radius" href="MenuEmpleado.php">INGRESAR
            <span class="icon-checkmark"></span></a>
                        
           </div>
        </div>




        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
          <div class="card-header">              
          <img src="img/familia.png">
          </div>              
            <div class="title">
              <h4>Dependiente Económico</h4>
            </div>
                        
            <div class="text">
              <p>Registrar, actualizar y eliminar información de los Dependientes Económicos.</p>
            </div>
                        
            <a class="button orange radius" href="MenuDependiente.php">INGRESAR
              <span class="icon-checkmark"></span></a>
                        
           </div>
        </div>



        <div class="card col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
          <div class="card-header">               
          <img src="img/colegio.png">
          </div>              
            <div class="title">
              <h4>Estudios</h4>
            </div>
                  <br>      
            <div class="text">
              <p>Registrar, actualizar y eliminar información de los Estudios de los Empleados.</p>
            </div>
                        
            <a class="button orange radius" href="MenuEstudios.php">INGRESAR
              <span class="icon-checkmark"></span></a>

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
    