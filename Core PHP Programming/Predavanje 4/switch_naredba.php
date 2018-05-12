<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Switch naredba</title>
	</head>
	
	<body>
		<?php 
		$x = 1;
		switch($x)
		{
			case 1:
				echo "Broj 1";
				break;
			case 2:
				echo "Broj 2";
				break;
			case 3:
				echo "Broj 3";
				break;
			default:
				echo "Broj nije izmedju u intervalu [1,3]";
		}
		?>
	</body>
</html>