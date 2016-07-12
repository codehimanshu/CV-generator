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
			$_SESSION['p2_name2']=$_POST["name2"];
		?>

		<form action="p4.php" method="post">
			<input type="text" name="name3" placeholder="Name3" required />
			<input type="submit" name="proceed" value="Proceed"> 
		</form>

	</body>
</html>