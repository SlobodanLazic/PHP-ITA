<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>For petlja predavanja 2</title>
	</head>
	
	<body>
		<?php 
		/*
		$niz [] = 1;
		$niz [] = 5;
		$niz [] = 17;
		
		kada indeksi idu po redu;
		
		for($i=0;$i<=2;$i++) // umesto $i<=2 mozemo i $i<=count($niz)
		{
			echo $niz[$i] . "<br>";
		}
		*/
		
		$niz[0] = 5;
		$niz[1] = 6;
		$niz[5] = 7;
		
		// kada ineksi ne idu po redu
		
		for($i = 0;$i < count($niz);$i++)
		{
			if($i == 0)
				echo current($niz) . "<br>";
			else 
				echo next($niz) . "<br>";
		}
		?>
	</body>
</html>