<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 1</title>
	</head>
	
	<body>
	<div style="text-align:center;">
		<h1>Slika</h1>
		<?php 
		$s = mt_rand(1,5);
		printf("<div><img src='%d.jpg' alt='slika'></div>", $s);
		?>
		</div>
	</body>
</html>