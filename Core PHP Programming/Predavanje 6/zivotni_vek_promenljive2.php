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
			$a++;
			return $c;
		}
		
		$a = 5;
		$b = 3;
		$rezultat = zbir($a,$b);
		echo $a;
		//echo $rezultat;
		?>
	</body>
</html>