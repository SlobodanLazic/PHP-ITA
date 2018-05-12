<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Rekurzivna funkcija</title>
	</head>
	
	<body>
		<?php 
		function zbir($a, $b)
		{	if( $a == 5 && $b == 3)
		{
		zbir(5, 3);
		}
		else
		{
			return;
		}
		
			$c = $a + $b;
			return $c;
		}
		
		
		$a = 5;
		$b = 3;
		$rezultat = zbir($a,$b);
		echo $rezultat;
		?>
	</body>
</html>