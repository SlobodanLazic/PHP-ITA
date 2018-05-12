<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_ispis</title>
	</head>
	
	<body>
		<?php 
		$username = "pera";
		printf("Zdravo, %s", $username);
		printf("<h1>Zdravo, %s. Danas je %s</h1>", "Pera", "petak");
		
		$string = "123";
		
		printf("%b - %c - %d - %.0f - %o 0 %s - %x <br>", $string, $string, $string, $string, $string, $string, $string);
		sprintf("%b", $string);
		
		echo chr(36).chr(64);
		
		?>
	</body>
</html>