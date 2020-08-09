 
<?php
	include 'plantillaDatosContacto.php';
	require 'conexion.php'; 
	
	$consulta = "SELECT datoscontacto.ID, datoscontacto.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, imagen.Imagen, datoscontacto.CorreoPersonal, datoscontacto.CorreoInstitucion, datoscontacto.TelefonoCasa, datoscontacto.TelefonoCelular from datoscontacto inner join Imagen ON datoscontacto.CURPEMpleado = Imagen.CURPEMpleado inner join Empleado ON datoscontacto.CURPEmpleado = Empleado.CURPEmpleado;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'Letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(31,10,'CURPEmpleado',1,0,'C',1);
	$pdf->Cell(25,10,'Nombre',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(20,10,'Fotografia',1,0,'C',1);
	$pdf->Cell(40,10,'Correo Institucional',1,0,'C',1);
	$pdf->Cell(40,10,'Correo Personal',1,0,'C',1);
	$pdf->Cell(25,10,'Telefono Casa',1,0,'C',1);
	$pdf->Cell(25,10,'Telefono Celular',1,1,'C',1);
		
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,20,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 20, 20, $pdf->Image($imagen, $pdf->GetX()+2, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(40,20,utf8_decode($registro['CorreoInstitucion']),1,0,'C');
		$pdf->Cell(40,20,utf8_decode($registro['CorreoPersonal']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['TelefonoCasa']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['TelefonoCelular']),1,1,'C');
		
		
	}
	$pdf->Output();
?>