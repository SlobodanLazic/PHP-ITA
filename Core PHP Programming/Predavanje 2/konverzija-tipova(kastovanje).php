<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Konverzija tipova(kastovanje)</title>
	</head>
	
	<body>
		<?php 
			$a = (int)"123"; //eksplicitno
			echo gettype($a);
			
			$b = 2 + "123"; //implicitno
			echo gettype($b);
		?>
	</body>
</html>