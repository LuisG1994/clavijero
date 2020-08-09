<script>
function editar(ID){
  window.location="editarDatosOtro.php?ID="+ID;
}
function eliminar(ID){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
  if(confirm(mensaje)){
    window.location="eliminarOtro.php?ID="+ID;
  }else{
  
  }
}
</script>
<script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tabla Datos de Contacto</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,shrink-to-fit=no" />
<link rel="shortcut icon" href="img/icc.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="tabla.css">
</head>
<body>
<form id="DatosOtro" name="DatosOtro" >
	
<?php include("encabezado.php"); ?>
<div id="paginacion">
  <a href="MenuEmpleado.php" aria-label="Previous">
  <span class="icon-arrow-left" aria-hidden="true"></span>
  </a>

  <a href="tablaOtro.php" aria-label="Previous">
  <span class="icon-arrow-right" aria-hidden="true"></span>
  </a>
</div>


         <div class="container py-4">
            <h3>Otros datos de los Empleados</h3></br>
            <div class="row">
              <div class="container py-4">
              <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar..">
            </div>
    <table class='table-container rounded table-hover border-warning order-table'>
		<thead>
			<tr>
			<th class="text-center ">Actualizar</br>Eliminar</th>
      <th class="text-center ">ID</th>
			<th class="text-center ">CURP Empleado</th>
      <th class="text-center ">Nombre</th>
      <th class="text-center ">Apellido Paterno</th>
      <th class="text-center ">Apellido Materno</th>
			<th class="text-center ">Enfermedad o Alergía</th>
			<th class="text-center ">Observaciones</th>
			</tr>
	</thead>
<?php 
            if(!isset($conexion)) { include("conexion.php");}
            $sql = "SELECT otro.ID, otro.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, otro.EnfermedadAlergia, otro.Observacion from otro inner join Empleado ON otro.CURPEmpleado = Empleado.CURPEmpleado;";
            $ejecutar_consulta = $conexion->query($sql);
            
              while ($reg = $ejecutar_consulta->fetch_assoc()) {
                echo "<tr align='center'>";
                echo '<td>';
                echo '<img src="imagenes/actions-edit.png" onclick="editar('.$reg['ID'].')"/>  ';
                echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$reg['ID'].')"/>';
                echo '</td>';
                echo "<td>".utf8_encode(utf8_decode($reg["ID"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["CURPEmpleado"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["Nombre"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["ApPaterno"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["ApMaterno"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["EnfermedadAlergia"]))."</td>";
                echo "<td>".utf8_encode(utf8_decode($reg["Observacion"]))."</td>";
                echo "</tr>";
              }
            
            ?>


</table>
<div class="container py-4">
<a class="btn btn-warning btn-lg" href="ReporObservaciones.php">Reporte PDF <span class="icon-bars"></span></a>
</div>
</div>
</div>  
 <br>
          <br>
<?php include("pie.php"); ?>

</form>

</body>
</html>