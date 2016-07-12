<?php
	session_start();
	if(!isset($_SESSION['status']))
		header("Location: 404.html");
	else
	{
		//require_once 'db_connect.php';
		require('fpdf.php');

		$p1_name=$_SESSION["p1_name"];
		$p1_tagline=$_SESSION["p1_tagline"];
		$p1_mobile=$_SESSION["p1_mobile"];
		$p1_email=$_SESSION["p1_email"];

		//$result=mysql_query("INSERT INTO data VALUES ('','$name')") or die(mysql_error());

		//create new pdf
		$pdf=new FPDF();
		$pdf->SetLeftMargin(15);
		$pdf->SetTopMargin(20);
		$pdf->AddPage();
		//name
		if(strlen($p1_name))
		{
			$pdf->SetFont('times','',26);
			$pdf->Write(10,$p1_name);
			$pdf->Ln();
		}
		//tagline
		if(strlen($p1_tagline))
		{
			$pdf->SetFont('times','',16);
			$pdf->Write(9,$p1_tagline);
			$pdf->Ln();
		}
		//mobile
		if($p1_mobile)
		{

		}
		//email
		if(strlen($p1_email))
		{
			$pdf->SetFont('times','',16);
			$pdf->SetTextColor(114,122,125);
			$pdf->Write(9,$p1_email);
			$pdf->Ln();
		}
		//line
		if(1)
		{
			$x=$pdf->GetX();
			$y=$pdf->GetY();
			$width=$pdf->GetPageWidth();
			$pdf->SetLineWidth(0.5);
			$pdf->SetDrawColor(114,122,125);
			$pdf->line($x+2,$y,$x+$width-30,$y);
		}
		//output
		$pdf->Output('D',$p1_name.".pdf",false);
		
		//session_destroy();
		//header("Location: index.php");
	}	
?>