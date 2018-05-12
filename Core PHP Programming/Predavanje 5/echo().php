<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_ispis</title>
	</head>
	
	<body>
		<?php 
		
		echo "Zdravo Svete";
		echo "<br>";
		
		echo "Dvostruki navodnici se stampaju \"ovako\".";
		echo "<br>";
		// Upotreba promenljivih
		$var1 = "prom1";
		$var2 = "prom2";
		
		echo "var1 je $var1";
		echo "<br>";
		// NIZOVI
		$var2 = array("vrednost"=> "var1");
		
		echo "ovo je {$var2['vrednost']}!";
		echo "<br>";
		
		echo 'var1 je $var1';
		echo "<br>";
		
		echo $var1;
		echo "<br>";
		echo $var1,$var2;
		echo "<br>";
		
		echo 'Ovaj ','string ','je ', 'kreiran ', 'od više parametara.', chr(10);
		echo "<br>";
		echo 'A ovaj ' . 'string ' . 'je ' . 'kreiran ' . 'konkatenacijom.' . "\n";
		echo "<br>";
		
		// uslovni (ternarni) operator
		($var1) ? print('true'): print('false'); // print funkcija
		echo "<br>";
		echo $var1 ? 'true' : 'false'; // echo i uslovni operator
		?>
	</body>
</html>