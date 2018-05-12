<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Switch naredba</title>
	</head>
	
	<body>
		<?php 
		$user ["role"] = "Administrator";
		$array1[] = 1;
		$array2[] = 2;
		$array2[] = 1;
		switch ($user["role"])
		{
			case "Administrator":
				print_r($array2);
				break;
			default:
				print_r($array1);
		}
		?>
	</body>
</html>