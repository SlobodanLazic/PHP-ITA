<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Provera svih tipova promenljivih</title>
	</head>
	
	<body>
		<?php 
		/* TIPOVI PODATAKA: bool, int, float, string, array, (object) */
		echo "<h2> Osnovni tipovi podataka</h2>";
		
		$indikator = true; /* logicka promenljiva */
		echo "$indikator <br>";
		
		$broj_strana_knjige = 3212;/* celobrojna promenljiva */
		echo "$broj_strana_knjige <br>";
		
		$temperatura = -15.3;/* realna promenljiva */
		echo "$temperatura <br>";
		
		$grad="Beograd";/* niska (string) */
		echo "$grad <br>";
		
		$niz = array(1,3,4,6);/* nizovi */
		print_r ($niz); //funkcija za ispis niza
		
		/* za odredjivanje tipa promenljive gettype() */
		echo "<h2>gettype() funkcija </h2>";
		echo "Tip promenljive indikator: " . gettype($indikator) . "<br>";
		echo "Tip promenljive broj_strana_knjige: " . gettype($broj_strana_knjige) . "<br>";
		echo "Tip promenljive  temperatura: " . gettype($temperatura) . "<br>";
		echo "Tip promenljive grad: " . gettype($grad) . "<br>";
		echo "Tip promenljive niz: " . gettype($niz) . "<br>";
		
		/* informacije o promenljivoj var_dump() */
		echo "<h2>var_dump() funkcija </h2>";
		var_dump($indikator);
		echo "<br>";
		var_dump($broj_strana_knjige);
		echo "<br>";
		var_dump($temperatura);
		echo "<br>";
		var_dump($grad);
		echo "<br>";
		var_dump($niz);
		echo "<br>";
		
		/* promenljive promenljive */
		echo "<h2>Promenljive promenljive</h2>";
		$x = 3;
		$y = "x"; // promenljiva promenljive sadrzi ime promenljive
		echo $$y; // promenljivoj x se pristupa pomocu $$
		?>
	</body>
</html>