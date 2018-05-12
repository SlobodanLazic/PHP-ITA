<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_random</title>
	</head>
	
	<body>
		<?php 
		$a = 5;
		$b = 10;
		echo rand($a,$b) . "<br>";
		echo srand($a,$b) . "<br>";
		echo getrandmax() . "<br>";
		echo mt_rand($a,$b) . "<br>";
		echo openssl_random_pseudo_bytes($a,$b) . "<br>";
		
		?>
	</body>
</html>