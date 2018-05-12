<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_korisnicki_definisana</title>
	</head>
	
	<body>
		<?php 
		function zbir($a, $b) 
		{
			$c = $a + $b;
			
			echo "Zbir $a i $b je $c";
			return $c;
		}
				
		
		
		zbir(5,3);
		?>
	</body>
</html>