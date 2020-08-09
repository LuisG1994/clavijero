 
<?php
	include 'plantillaDatosPersonales.php';
	require 'conexion.php';
	
	$consulta = "SELECT Empleado.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, Empleado.Sexo,Empleado.FecNac, Empleado.EstadoCivil, Empleado.RFC,Empleado.SegSocial, Empleado.INE, Empleado.TipoSangre, Empleado.Calle, Empleado.Numero, Empleado.Colonia, Empleado.Localidad, Empleado.Municipio, Empleado.Estado, imagen.Imagen from Empleado inner join Imagen ON Empleado.CURPEMpleado = Imagen.CURPEMpleado;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'Legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(31,25,'CURPEmpleado',1,0,'C',1);
	$pdf->Cell(25,25,'Nombre',1,0,'C',1);
	$pdf->Cell(15,25,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(15,25,'Ap Materno',1,0,'C',1);
	$pdf->Cell(18,25,'Fotografia',1,0,'C',1);
	$pdf->Cell(13,25,'Sexo',1,0,'C',1);
	$pdf->Cell(14,25,'Fec Nac',1,0,'C',1);
	$pdf->Cell(12,25,'Est Civil',1,0,'C',1);
	$pdf->Cell(22,25,'RFC',1,0,'C',1);
	$pdf->Cell(18,25,'Seg Social',1,0,'C',1);
	$pdf->Cell(18,25,'INE',1,0,'C',1);
	$pdf->Cell(15,25,'Tipo Sangre',1,0,'C',1);
	$pdf->Cell(23,25,'Calle',1,0,'C',1);
	$pdf->Cell(11,25,'Numero',1,0,'C',1);
	$pdf->Cell(23,25,'Colonia',1,0,'C',1);
	$pdf->Cell(22,25,'Localidad',1,0,'C',1);
	$pdf->Cell(22,25,'Municipio',1,0,'C',1);
	$pdf->Cell(22,25,'Estado',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,25,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(25,25,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(15,25,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(15,25,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 18, 25, $pdf->Image($imagen, $pdf->GetX()+1, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(13,25,utf8_decode($registro['Sexo']),1,0,'C');
		$pdf->Cell(14,25,utf8_decode($registro['FecNac']),1,0,'C');
		$pdf->Cell(12,25,utf8_decode($registro['EstadoCivil']),1,0,'C');
		$pdf->Cell(22,25,utf8_decode($registro['RFC']),1,0,'C');
		$pdf->Cell(18,25,utf8_decode($registro['SegSocial']),1,0,'C');
		$pdf->Cell(18,25,utf8_decode($registro['INE']),1,0,'C');
		$pdf->Cell(15,25,utf8_decode($registro['TipoSangre']),1,0,'C');
		$pdf->Cell(23,25,utf8_decode($registro['Calle']),1,0,'C');
		$pdf->Cell(11,25,utf8_decode($registro['Numero']),1,0,'C');
		$pdf->Cell(23,25,utf8_decode($registro['Colonia']),1,0,'C');
		$pdf->Cell(22,25,utf8_decode($registro['Localidad']),1,0,'C');
		$pdf->Cell(22,25,utf8_decode($registro['Municipio']),1,0,'C');
		$pdf->Cell(22,25,utf8_decode($registro['Estado']),1,1,'C');
		
		
		
	}
	$pdf->Output();
?>