<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Pozivanje parametara po referenci</title>
	</head>
	
	<body>
		<?php 
		function zbir(&$a, $b)
		{			
			
			$a++;

		}
		
		$a = 5;
		$b = 3;
		$rezultat = zbir($a,$b);
		echo $a;

		?>
	</body>
</html>