<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori(poredjenja)</title>
	</head>
	
	<body>
		<?php 
		//Koriste se za poredjenje vrednosti promenljivih rezultat je 1(shto znachi true boolean) ili 0(false)
		$a = 2;
		$b = 5;
		
		echo $a > $b . "<br>";
		echo $a < $b . "<br>";
		echo $a >= $b . "<br>"; // => da li je $ vece ili jednako od $b
		echo $a <= $b . "<br>"; // <= da li je $a manje ili jednako od $b
		echo $a == $b . "<br>"; // == je poredjenje izmedju 2 vrednosti,pita da li je $a jednako $b
		echo $a != $b . "<br>"; // != poredjenje izmedju 2 vrednosti,pita da li je $a razlichito od $b
		?>
	</body>
</html>