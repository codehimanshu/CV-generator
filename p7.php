<?php
	session_start();
	if(!isset($_POST["proceed"]))
		header("Location: 404.html");
	else
	{
		$_SESSION['status']=true;
		$_SESSION['p6_name6']=$_POST["name6"];
		header("Location: generate.php");
	}
?>