 
<?php
	include 'plantillaObservaciones.php';
	require 'conexion.php'; 
	
	$consulta = "SELECT otro.ID, otro.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, otro.EnfermedadAlergia, otro.Observacion, imagen.Imagen from otro inner join Empleado ON otro.CURPEmpleado = Empleado.CURPEmpleado inner join imagen ON otro.CURPEmpleado = Imagen.CURPEmpleado;";
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
	$pdf->Cell(50,10,'Enfermedad o Alergia',1,0,'C',1);
	$pdf->Cell(85,10,'Observaciones',1,1,'C',1);
		
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,20,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 20, 20, $pdf->Image($imagen, $pdf->GetX()+2, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(50,20,utf8_decode($registro['EnfermedadAlergia']),1,0,'C');
		$pdf->Cell(85,20,utf8_decode($registro['Observacion']),1,1,'C');
		
		
		
	}
	$pdf->Output();
?>