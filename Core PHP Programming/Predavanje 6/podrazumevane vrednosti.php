<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Podrazumevane vrednosti</title>
	</head>
	
	<body>
		<?php 
		$d = 10;
		function zbir($a, $b = 0)
		{			
			$c = $a + $b;
			return $c;
		}
		
		$a = 5;
		$b = 3;
		$rezultat = zbir($a);
		echo $rezultat;
		?>
	</body>
</html>