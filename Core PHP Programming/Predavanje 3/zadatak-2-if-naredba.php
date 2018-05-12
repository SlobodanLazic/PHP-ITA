<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>If naredba</title>
	</head>
	
	<body>
		<?php 
		$y = 3;
		if($y > 5 && $y < 15)
		{
			echo "Vrednost promenljive y je izmedju 5 i 15.";
			$y++;
		}
		else
		{
			echo "Vrednost promenljive y je van opsega (5,15)";
			if ($y <5 || $y == 5)
			{
				echo "Vrednost promenljive y je manja od 5, ili jednaka 5.";
				$y += 5;
			}
			else
			{
				echo "Vrednost promenljive y je 15, ili veca od 15.";
				$y -= 5;
			}
		}
		echo "Rezultat je " . --$y . "<br>";		
		echo "Rezultat je " . $y-- . "<br>";		
		echo "Rezultat je " . $y . "<br>";		
		?> 
	</body>
</html>