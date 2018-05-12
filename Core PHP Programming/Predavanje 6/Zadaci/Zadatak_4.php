<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 4</title>
	</head>
	
	<body>
		<?php 
		$n = 5;
		$f = faktorijel($n);
		echo "Faktorijel broja $n je $f";
		function faktorijel($n)
		{
			if ($n <= 0)
			{
				return 1;
			}
			return $n * faktorijel($n - 1);
		}
		
		?>
	</body>
</html>