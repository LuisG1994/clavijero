 
<?php
	include 'plantillaDatosPersonales.php';
	require 'conexion.php';
	
	$consulta = "SELECT Empleado.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, Empleado.Sexo,Empleado.FecNac, Empleado.EstadoCivil, Empleado.RFC,Empleado.SegSocial, Empleado.INE, Empleado.TipoSangre, Empleado.Calle, Empleado.Numero, Empleado.Colonia, Empleado.Localidad, Empleado.Municipio, Empleado.Estado, imagen.Imagen, datoscontacto.CorreoPersonal, datoscontacto.TelefonoCasa, datoscontacto.TelefonoCelular from Empleado inner join Imagen ON Empleado.CURPEMpleado = Imagen.CURPEMpleado inner join datoscontacto ON Empleado.CURPEmpleado = datoscontacto.CURPEmpleado;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'A3');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(31,10,'CURPEmpleado',1,0,'C',1);
	$pdf->Cell(20,10,'Nombre',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(18,10,'Fotografia',1,0,'C',1);
	$pdf->Cell(30,10,'Correo Electronico',1,0,'C',1);
	$pdf->Cell(15,10,'Tel Casa',1,0,'C',1);
	$pdf->Cell(16,10,'Celular',1,0,'C',1);
	$pdf->Cell(13,10,'Sexo',1,0,'C',1);
	$pdf->Cell(14,10,'Fec Nac',1,0,'C',1);
	$pdf->Cell(12,10,'Est Civil',1,0,'C',1);
	$pdf->Cell(22,10,'RFC',1,0,'C',1);
	$pdf->Cell(18,10,'Seg Social',1,0,'C',1);
	$pdf->Cell(18,10,'INE',1,0,'C',1);
	$pdf->Cell(15,10,'Tipo Sangre',1,0,'C',1);
	$pdf->Cell(23,10,'Calle',1,0,'C',1);
	$pdf->Cell(11,10,'Numero',1,0,'C',1);
	$pdf->Cell(23,10,'Colonia',1,0,'C',1);
	$pdf->Cell(22,10,'Localidad',1,0,'C',1);
	$pdf->Cell(22,10,'Municipio',1,0,'C',1);
	$pdf->Cell(22,10,'Estado',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$imagen="".$registro['Imagen'];

		$pdf->Cell(31,20,utf8_decode($registro['CURPEmpleado']),1,0,'C');
		$pdf->Cell(20,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell( 18, 20, $pdf->Image($imagen, $pdf->GetX()+1, $pdf->GetY()+3, 16), 1, 0, 'C', false );
		$pdf->Cell(30,20,utf8_decode($registro['CorreoPersonal']),1,0,'C');
		$pdf->Cell(15,20,utf8_decode($registro['TelefonoCasa']),1,0,'C');
		$pdf->Cell(16,20,utf8_decode($registro['TelefonoCelular']),1,0,'C');
		$pdf->Cell(13,20,utf8_decode($registro['Sexo']),1,0,'C');
		$pdf->Cell(14,20,utf8_decode($registro['FecNac']),1,0,'C');
		$pdf->Cell(12,20,utf8_decode($registro['EstadoCivil']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['RFC']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['SegSocial']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['INE']),1,0,'C');
		$pdf->Cell(15,20,utf8_decode($registro['TipoSangre']),1,0,'C');
		$pdf->Cell(23,20,utf8_decode($registro['Calle']),1,0,'C');
		$pdf->Cell(11,20,utf8_decode($registro['Numero']),1,0,'C');
		$pdf->Cell(23,20,utf8_decode($registro['Colonia']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Localidad']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Municipio']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Estado']),1,1,'C');
		
		
		
	}
	$pdf->Output();
?>