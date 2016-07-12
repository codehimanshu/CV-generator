<!DOCTYPE html>
<html>
	<head>
		<title>
			CV Generator
		</title>
	</head>
	
	<body>
		
		<?php
			session_start();
			if(!isset($_POST["proceed"]))
				header("Location: 404.html");
			$_SESSION['p1_name']=$_POST["name"];
			$_SESSION['p1_tagline']=$_POST["tagline"];
			$_SESSION['p1_mobile']=$_POST["mobile"];
			$_SESSION['p1_email']=$_POST["email"];
			
		?>

		<form action="p3.php" method="post">
			<input type="text" name="p2_summary" placeholder="Summary" />
			<input type="submit" name="proceed" value="Proceed"> 
		</form>

	</body>
</html>