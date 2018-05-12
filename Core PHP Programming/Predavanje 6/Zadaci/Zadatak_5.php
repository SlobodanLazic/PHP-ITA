<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 5</title>
	</head>
	
	<body>
		<?php 
		
				
		function fibonacci($n)
		{	
			echo $n + $n - 1;
		if ($n == 0)
			{
				fibonacci($n - 1);
				
				return $n;
			}
		
			
				
		}
		
		fibonacci(3);
		?>
	</body>
</html>