 
<?php
	include 'plantillaDependientes.php';
	require 'conexion.php';
	
	$consulta = "SELECT dependienteeconomico.CURPEmpleado,Empleado.Nombre,Empleado.ApPaterno, Empleado.ApMaterno, dependienteeconomico.CurpDependiente, dependienteeconomico.NombreD, dependienteeconomico.ApPaternoD, dependienteeconomico.ApMaternoD, dependienteeconomico.Calle, dependienteeconomico.Numero, dependienteeconomico.Colonia, dependienteeconomico.Localidad, dependienteeconomico.Municipio, dependienteeconomico.Estado, datoscontactodependiente.CorreoPersonal, datoscontactodependiente.Celular, datoscontactodependiente.TelefonoCasa from dependienteeconomico inner join Empleado ON dependienteeconomico.CURPEMpleado = Empleado.CURPEMpleado inner join datoscontactodependiente ON dependienteeconomico.CurpDependiente = datoscontactodependiente.CurpDependiente;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('L', 'mm', 'Legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(23,10,'Nombre Empleado',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(25,10,'CURP Dependiente',1,0,'C',1);
	$pdf->Cell(30,10,'Nombre Dependiente',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(18,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(30,10,'Correo Electronico',1,0,'C',1);
	$pdf->Cell(15,10,'Tel Casa',1,0,'C',1);
	$pdf->Cell(16,10,'Celular',1,0,'C',1);
	$pdf->Cell(23,10,'Calle',1,0,'C',1);
	$pdf->Cell(11,10,'Numero',1,0,'C',1);
	$pdf->Cell(23,10,'Colonia',1,0,'C',1);
	$pdf->Cell(22,10,'Localidad',1,0,'C',1);
	$pdf->Cell(22,10,'Municipio',1,0,'C',1);
	$pdf->Cell(22,10,'Estado',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',7);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$pdf->Cell(23,20,utf8_decode($registro['Nombre']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApPaterno']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApMaterno']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['CurpDependiente']),1,0,'C');
		$pdf->Cell(30,20,utf8_decode($registro['NombreD']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApPaternoD']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['ApMaternoD']),1,0,'C');
		$pdf->Cell(30,20,utf8_decode($registro['CorreoPersonal']),1,0,'C');
		$pdf->Cell(15,20,utf8_decode($registro['TelefonoCasa']),1,0,'C');
		$pdf->Cell(16,20,utf8_decode($registro['Celular']),1,0,'C');
		$pdf->Cell(23,20,utf8_decode($registro['Calle']),1,0,'C');
		$pdf->Cell(11,20,utf8_decode($registro['Numero']),1,0,'C');
		$pdf->Cell(23,20,utf8_decode($registro['Colonia']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Localidad']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Municipio']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['Estado']),1,1,'C');
		
		
		
	}
	$pdf->Output();
?>