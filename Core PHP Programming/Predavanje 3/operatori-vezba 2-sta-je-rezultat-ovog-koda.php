<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori vezba2(sta je rezultat navedenog koda)</title>
	</head>
	
	<body>
		<?php 
		$b = 0;
		$a = 15;
		$b += --$a; // $b = $b +(--$a) = 14  $a = 14;
		$c = $a; // $c = 14;
		$b = $c; // $b = 14;
		$a = $c; // $a = 14;
		$b += $c; // $b = $b + $c = 14 + 14 = 28;
		echo ++$a . "<br>"; // 15
		echo $b . "<br>"; // 28
		echo --$c . "<br>"; // 13
		?>
	</body>
</html>