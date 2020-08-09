 
<?php
	include 'plantillaDatosEmpresa.php';
	require 'conexion.php'; 
	
	$consulta = "SELECT datosempresa.ID, datosempresa.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, imagen.Imagen, datosempresa.Cargo, datosempresa.Depto, datosempresa.Subdireccion, datosempresa.Piso, datosempresa.Extension, datosempresa.Responsable, datoscontacto.CorreoInstitucion from datosempresa inner join Imagen ON datosempresa.CURPEMpleado = Imagen.CURPEMpleado inner join Empleado ON datosempresa.CURPEmpleado = Empleado.CURPEmpleado inner join datoscontacto ON datosempresa.CURPEmpleado = datoscontacto.CURPEmpleado;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(31,10,'CURPEmpleado',1,0,'C',1);
	$pdf->Cell(25,10,'Nombre',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(25,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(20,10,'Fotografia',1,0,'C',1);
	$pdf->Cell(33,10,'Correo Institucional',1,0,'C',1);
	$pdf->Cell(20,10,'Cargo',1,0,'C',1);
	$pdf->Cell(20,10,'Departamento',1,0,'C',1);
	$pdf->Cell(20,10,'Subdireccion',1,0,'C',1);
	$pdf->Cell(20,10,'Piso',1,0,'C',1);
	$pdf->Cell(20,10,'Extension',1,0,'C',1);
	$pdf->Cell(20,10,'Responsable',1,1,'C',1);
		
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,20,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 20, 20, $pdf->Image($imagen, $pdf->GetX()+2, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(33,20,utf8_decode($registro['CorreoInstitucion']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Cargo']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Depto']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Subdireccion']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Piso']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Extension']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Responsable']),1,1,'C');
		
		
	}
	$pdf->Output();
?>