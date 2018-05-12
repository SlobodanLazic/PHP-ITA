<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_ispis</title>
	</head>
	
	<body>
		<?php 
		
		$string = "123";
		
		sprintf("%b - %c - %d - %.0f - %o - %s - %x", $string, $string, $string, $string, $string, $string, $string);
		// sprintf() ne ispisuje sadrzaj, vec ga vraca kao povratnu vrednost
		?>
	</body>
</html>