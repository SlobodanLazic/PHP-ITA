<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori vezba1(sta je rezultat navedenog koda)</title>
	</head>
	
	<body>
		<?php 
		$a = 27;
		$b = $a++; // $b = 27 $a=28
		$c = ($a % $b); // $a= 27 $b = 28 $c = (27 % 28) = 1
		$b += $a; // $b = $b + $a = 28 + 27 = 55
		$c = ($a + $b); // $c = 55+ 28 = 83
		$b += $c; // $b = $b + $c = 55 + 83 = 138
		echo $a . "<br>"; // 28
		echo $b . "<br>"; // 138
		echo $c; // 83
		?>
	</body>
</html>