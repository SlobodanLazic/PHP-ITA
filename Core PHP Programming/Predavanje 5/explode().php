<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_za_rad_sa_stringovima</title>
	</head>
	
	<body>
		<?php 
		$imena = "Mira Pera AAAAA PHPM B3C4";
		$niz = explode(" ",$imena);
		
		echo $niz[0] . " i " . $niz[1] . " i " . $niz[2];
		echo "<br>";
		
		foreach($niz as $ime)
		{
			echo $ime . "<br>";
		}
		?>
	</body>
</html>