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
			$_SESSION['p4_name4']=$_POST["name4"];
		?>

		<form action="p6.php" method="post">
			<input type="text" name="name5" placeholder="Name5" required />
			<input type="submit" name="proceed" value="Proceed"> 
		</form>

	</body>
</html>