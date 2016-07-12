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
			$_SESSION['p3_name3']=$_POST["name3"];
		?>

		<form action="p5.php" method="post">
			<input type="text" name="name4" placeholder="Name4" required />
			<input type="submit" name="proceed" value="Proceed"> 
		</form>

	</body>
</html>