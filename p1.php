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
		?>

		<form action="p2.php" method="post">
			<input type="text" name="name" placeholder="Full Name" required />
			<input type="text" name="tagline" placeholder="Current status/tagline" />
			<input type="number" name="mobile" placeholder="Mobile No." />
			<input type="email" name="email" placeholder="Email ID" required />
			<input type="submit" name="proceed" value="Proceed" /> 
		</form>

	</body>
</html>