<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori vezba1(sta je rezultat navedenog koda)</title>
	</head>
	
	<body>
		<?php 
		$a = 2;
		$b = 3;
		$c = 4;
		$x = $a + $b * ($c + $b) / $b % 2; // $x = 2 + 3 * (3 + 4) / 3 % 2 = 
		// = 2 + 3 * 7 / 3 % 2 = 2 + 7 % 2 = 2 + 1 = 3;
		
		echo $x; // 3
		?>
	</body>
</html>