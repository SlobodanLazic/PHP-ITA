<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>For petlja predavanja 2</title>
	</head>
	
	<body>
		<?php 
		/*
		$niz[]= 1;
		$niz[]= 5;
		$niz[]= 17;
		
		foreach ($niz as $e)
		{
			echo $e . "<br>";
		}
		*/
		$niz[0]= 5;
		$niz[1]= 6;
		$niz[5]= 7;
		
		foreach ($niz as $e)
		{
			echo $e . "<br>";
		}
		/* 
		kada mi treba vrednost niza ili
		$niz = array ["pera" => 1,"mira" => 2]
		foreach ($niz as $e==>$i)
		{
			echo $e . <br>;
			echo $i . <br>;
		}
		*/
		?>
	</body>
</html>