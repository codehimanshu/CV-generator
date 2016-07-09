<?php
	if(isset($_POST["generate"]))
	{
		require_once 'db_connect.php';
		require('fpdf.php');

		$name=$_POST["name"];

		$result=mysql_query("INSERT INTO data VALUES ('','$name')") or die(mysql_error());

		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Write(5,$name);
		$pdf->Output('F',$name.".pdf",false);

		header("Location: index.php");
	}	
	else
		header("Location: index.php");
?>