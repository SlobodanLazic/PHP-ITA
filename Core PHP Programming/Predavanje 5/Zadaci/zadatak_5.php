<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 5</title>
	</head>
	
	<body>
		<?php 
		/* echo $n*($n-1)*($n-2)*($n-3)*($n-4)*1 */
		$n = 5;
		$result = 1;
		for($i=$n;$i>0;$i--)
		{
			$result *= $i;
		}
		echo $result;
		?>
	</body>
</html>