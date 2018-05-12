<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Konstante</title>
	</head>
	
	<body>
		<?php 
		/* konstante */
		echo "<h2> Konstante </h2>";
		define("CENA_RIBE", 300);
		echo "Cena ribe na tržištu je: " . CENA_RIBE . " dinara<br/>";
		echo "Cena ribe na tržištu je: . CENA_RIBE . dinara<br/>";
		//CENA_RIBE = 500; // sintaksno neispravno
		$CENA_RIBE = 500;
		echo "Cena ribe na tržištu je: " . CENA_RIBE . "dinara<br/>";
		echo "$CENA_RIBE";
		// define("CENA_RIBE", 300) //ponovna deklaracija konstante pravi greshku!
		?>		
	</body>
</html>