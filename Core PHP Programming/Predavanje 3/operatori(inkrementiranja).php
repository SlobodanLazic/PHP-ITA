<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Operatori(inkrementiranja)</title>
	</head>
	
	<body>
		<?php 
		//Inkrement zapravo znachi povecati vrednost za 1 ++,dekrement smanjiti za 1 --
		//Razlikujemo prefiksne(++$a) i postfiksne($a++) operatore inkremetiranja
		
		//prefiksni inkrement
		$a = 3;
		echo ++$a . "<br>"; // prvo izvrshi ++ pa onda $a ispishe
		//postfiksni inkrement
		$a = 3;
		echo $a++ . "<br>";
		echo $a . "<br>"; // ++ izvrshen
		//prefiksni dekrement
		$a = 3;
		echo --$a . "<br>"; // prvo izvrshi -- pa onda $a ispishe
		
		//postfiksni dekrement
		$a = 3;
		echo $a-- . "<br>"; // prvo ispishe $a pa onda -- tako da ako opet pozovemo echo $a u sledecem ispisu je 2
		echo $a;
		?>
	</body>
</html>