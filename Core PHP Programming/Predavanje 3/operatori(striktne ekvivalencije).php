<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori(striktne ekvivalencije)</title>
	</head>
	
	<body>
		<?php 
		//Koriste se za poredjenje vrednosti promenljivih
		$a = "2";
				
		echo $a=== 2 . "<br>"; // proverava da li je istog tipa i vrednosti kao a (false(0) jer je a string)
		echo $a!== 2 . "<br>"; // proverava da li je razlichitog tipa i vrednosti kao a (true(1) jer je a string)
		
		$tacno = true;
		$tacno == 1; // da li je true isto shto i 1,jeste jer se true prikazuje kao broj 1
		$tacno === 1; // da li je true istog tipa i vrednosti kao kec,nije jer je 1 broj a true boolean promenljiva
		?>
	</body>
</html>