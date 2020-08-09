<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('img/ICC.jpg', 12, 10, 30);
			$this->SetFont('Arial','B',14);
			$this->Cell(30);
			$this->Cell(150,20, 'Reporte Datos de contacto Dependientes Economicos',0,0,'C');
			$this->Ln(30);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>