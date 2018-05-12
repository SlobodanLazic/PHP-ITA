<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 3</title>
	</head>
	<body>
		<?php 
			if (isset($_POST["submit"]))
			{
				$filenames = $_POST["name"];
				var_dump($filenames);
			}
		?>	
	</body>
</html>