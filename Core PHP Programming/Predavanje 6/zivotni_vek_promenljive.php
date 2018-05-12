<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_korisnicki_definisana</title>
	</head>
	
	<body>
		<?php 
		$d = 10;
		function zbir($a, $b)
		{			
			$c = $a + $b;
			global $d;
			echo $d;
			return $c;
		}
		
		
			
		$rezultat = zbir(5,3);
		echo $rezultat;
		?>
	</body>
</html>