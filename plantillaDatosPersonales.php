<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('img/ICC.jpg', 11, 5, 43);
			$this->SetFont('Arial','B',18);
			$this->Cell(30);
			$this->Cell(280,13, 'Reporte Datos personales de los Empleados',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>