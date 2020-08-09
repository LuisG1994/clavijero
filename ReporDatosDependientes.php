 
<?php
	include 'plantilladATOSDependientes.php';
	require 'conexion.php';
	
	$consulta = "SELECT dependienteeconomico.CurpDependiente, dependienteeconomico.NombreD, dependienteeconomico.ApPaternoD, dependienteeconomico.ApMaternoD, datoscontactodependiente.CorreoPersonal, datoscontactodependiente.Celular, datoscontactodependiente.TelefonoCasa from dependienteeconomico inner join datoscontactodependiente ON dependienteeconomico.CurpDependiente = datoscontactodependiente.CurpDependiente;";
    $ejecutar_consulta = $conexion->query($consulta);
	
	$pdf = new PDF('P', 'mm', 'Letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(32,10,'CURP Dependiente',1,0,'C',1);
	$pdf->Cell(33,10,'Nombre Dependiente',1,0,'C',1);
	$pdf->Cell(22,10,'Ap Paterno',1,0,'C',1);
	$pdf->Cell(22,10,'Ap Materno',1,0,'C',1);
	$pdf->Cell(46,10,'Correo Electronico',1,0,'C',1);
	$pdf->Cell(18,10,'Tel Casa',1,0,'C',1);
	$pdf->Cell(25,10,'Celular',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',9);
	
	while($registro = $ejecutar_consulta->fetch_assoc()){
		
		$pdf->Cell(32,20,utf8_decode($registro['CurpDependiente']),1,0,'C');
		$pdf->Cell(33,20,utf8_decode($registro['NombreD']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['ApPaternoD']),1,0,'C');
		$pdf->Cell(22,20,utf8_decode($registro['ApMaternoD']),1,0,'C');
		$pdf->Cell(46,20,utf8_decode($registro['CorreoPersonal']),1,0,'C');
		$pdf->Cell(18,20,utf8_decode($registro['TelefonoCasa']),1,0,'C');
		$pdf->Cell(25,20,utf8_decode($registro['Celular']),1,1,'C');		
		
		
	}
	$pdf->Output();
?>