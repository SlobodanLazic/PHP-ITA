<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_random</title>
	</head>
	
	<body>
		<?php 
		echo mt_rand() . "<br>";
		// vraca vrednost u opsegu od 0 do getrandmax()
		
		echo mt_rand(5, 15);
		// vraca vrednost u opsegu od 5 do 15
		?>
	</body>
</html>