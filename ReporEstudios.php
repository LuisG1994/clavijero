 
<?php
	include 'plantillaEstudios.php';
	require 'conexion.php'; 
	
	$consulta = "SELECT estudio.ID, estudio.CURPEmpleado, Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, estudio.MaxEstudio, estudio.EstudioAlcanzado, estudio.NumComprobEst, estudio.Escuela, estudio.Duracion, estudio.Cedula, imagen.Imagen from estudio inner join Empleado ON estudio.CURPEmpleado = Empleado.CURPEmpleado inner join imagen ON estudio.CURPEmpleado = imagen.CURPEmpleado;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'Legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(31,10,'CURPEmpleado',1,0,'C',1);
	$pdf->Cell(25,10,'Nombre',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(20,10,'Fotografia',1,0,'C',1);
	$pdf->Cell(27,10,'Maximo de Estudios',1,0,'C',1);
	$pdf->Cell(38,10,'Nombre del Estudio',1,0,'C',1);
	$pdf->Cell(41,10,'Numero Comprobante de Estudio',1,0,'C',1);
	$pdf->Cell(50,10,'Escuela o Plantel',1,0,'C',1);
	$pdf->Cell(25,10,'Duracion',1,0,'C',1);
	$pdf->Cell(28,10,'Cedula',1,1,'C',1);
		
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,20,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 20, 20, $pdf->Image($imagen, $pdf->GetX()+2, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(27,20,utf8_decode($registro['MaxEstudio']),1,0,'C');
		$pdf->Cell(38,20,utf8_decode($registro['EstudioAlcanzado']),1,0,'C');
		$pdf->Cell(41,20,utf8_decode($registro['NumComprobEst']),1,0,'C');
		$pdf->Cell(50,20,utf8_decode($registro['Escuela']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Duracion']),1,0,'C');
		$pdf->Cell(28,20,utf8_decode($registro['Cedula']),1,1,'C');
		
		
	}
	$pdf->Output();
?>