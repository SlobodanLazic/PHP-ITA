<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcije za rad sa promenljivama</title>
	</head>
	
	<body>
		<?php 
		// da li je niz u pitanju
		$array ["str"] = 2;
		$array ["br"] = 1;
		printf(is_array($array) . " da li je niz u pitanju <br>");
		// da li je logicka boolean promenljiva(true/false) u pitanju
		$bool = true;
		printf(is_bool($bool). " da li je logicka boolean promenljiva(true/false) u pitanju <br>");
		//da li je float/double/real realna promenljiva u pitanju
		$temperature = -15.3;
		printf(is_float($temperature) . " da li je float/double/real realna promenljiva u pitanju <br>");
		printf(is_double($temperature) . " da li je float/double/real realna promenljiva u pitanju <br>");
		printf(is_real($temperature) . " da li je float/double/real realna promenljiva u pitanju <br>");
		//da li je integer/int/long celobrojna promenljiva u pitanju
		$year = 2017;
		printf(is_integer($year) . " //da li je integer/int/long celobrojna promenljiva u pitanju <br>");
		printf(is_int($year) . " //da li je integer/int/long celobrojna promenljiva u pitanju <br>");
		printf(is_long($year) . " //da li je integer/int/long celobrojna promenljiva u pitanju <br>");
		//da li je broj u pitanju
		$numerics = 5;
		printf (is_numeric($numerics) . " da li je broj u pitanju <br>");
		//da li je vrednost promenljive null
		$nulling = null;
		printf(is_null($nulling) . " da li je vrednost promeljive null <br>");
		// da li je vrednost promenljive karakterna niska (string)
		$strings = "hey";
		printf(is_string($strings) . " da li je vrednost promenljive string <br>");
		//konvertuje promenljivu u string
		$conv = true;
		printf(strval($conv) . " kovertuje promenljivu u string strval() <br>");
		//provera da li promenljiva postoji
		$emp = "oi";
		printf(empty($emp));
		print(($emp) . " provera da li promenljiva postoji empty() <br>");
		?>
	</body>
</html>