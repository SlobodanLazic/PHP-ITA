<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_random</title>
	</head>
	
	<body>
		<?php 
		echo rand() . "<br>";
		// vraca vrednost u opsegu od 0 do getrandmax()
		
		echo rand(5,15)  . "<br>";
		// vraca vrednost u opsegu od 5 do 15
		
		echo mt_rand() . "<br>";
		// vraca vrednost u opsegu od 0 do getrandmax() generator sluchajnih brojeva i do 4 puta brzi od rand
		
		echo mt_rand(5,15) . "<br>";
		// vraca vrednost u opsegu od 5 do 15 generator sluchajnih brojeva i do 4 puta brzi od rand

		?>
	</body>
</html>