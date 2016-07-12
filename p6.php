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
			$_SESSION['p5_name5']=$_POST["name5"];
		?>

		<form action="p7.php" method="post">
			<input type="text" name="name6" placeholder="Name6" required />
			<input type="submit" name="proceed" value="Proceed"> 
		</form>

	</body>
</html>